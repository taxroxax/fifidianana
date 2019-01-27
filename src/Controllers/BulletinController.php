<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 12/01/19
 * Time: 00:51
 */

namespace App\Controllers;


use App\Dao\BulletinDao;
use App\Dao\CandidatDao;
use App\Dao\UserDao;
use App\Dao\VerificationDao;
use App\Models\Bulletin;
use App\Models\Candidat;
use App\Models\Verification;

class BulletinController extends Controller
{

    public function saveBulletin()
    {
        session_start();

        if ($_SESSION['username'] != null) {
            $dao = new BulletinDao();
            $candidatDao = new CandidatDao();
            $verificationDao = new VerificationDao();
            $allCandidat = $candidatDao->getAll();
            $bulletins = $_POST['status'];
            $code = $_POST['code'];
            $maxParQuartier = $_POST['maxParQuartier'];
            $userDao = new UserDao();
            $user = $userDao->getUserByLogin($_SESSION['login']);
            $sysCounter = $dao->getLastInsertedByUser($user->getId())[0];

            if(intval($sysCounter)+1 <= intval($user->getInputNumber())){
                foreach ($bulletins as $bulletinFaritra) {
                    foreach ( $bulletinFaritra as $bulletinFaritraGenre) {
                        foreach ($bulletinFaritraGenre as $idCandidat => $status) {
                            $c = new Candidat();
                            $c->setId($idCandidat);
                            $b = new Bulletin($c, $code, 1, intval($user->getId()), $sysCounter == null ? 1 : intval($sysCounter) + 1);
                            $dao->save($b);
                            $allCandidat = $this->deleteCandidat($allCandidat, $c);
                        }
                    }
                }

                foreach ($allCandidat as $candidatNotSelected) {
                    $b = new Bulletin($candidatNotSelected, $code, 0, intval($user->getId()),$sysCounter == null ? 1 : intval($sysCounter) + 1);
                    $dao->save($b);
                }

            } else{
                return $this->redirect('logout');
            }

            $comment = "";
            $statusBulletin = "";

           // var_dump($maxParQuartier);


            foreach (array_keys($maxParQuartier) as $id) {
                if(isset($bulletins[$id])){
                    foreach(array_keys($bulletins[$id]) as $sexe){
                        $verification = $dao->checkMax($sexe,$id,$code)[0];
                        $compare = $maxParQuartier[$id];
                        if($verification > $compare ){
                            $comment .= $sexe.$id .";";
                        }
                    }
                }

            }
            if(!empty($comment)){
                $statusBulletin .=  'KO';
            }else{
                $statusBulletin .= 'OK';
            }
            $newVerification = new Verification($code,$comment,intval($user->getId()),$statusBulletin);
            $verificationDao->save($newVerification);

            return $this->redirect('candidat.list');
        } else return $this->redirect('login.show');
    }

    /**
     * Remove a selected candidat from list.
     *
     * @param Candidat[] $allCandidat the list of candidat
     *
     * @param Candidat $selectedCandidat the candidat selected by the voters
     *
     * @return array
     */
    public function deleteCandidat($allCandidat, $selectedCandidat)
    {

        $resultats = [];

        foreach ($allCandidat as $candidat) {
            if ($selectedCandidat->getId() !== $candidat->getId()) {
                $resultats[] = $candidat;
            }
        }

        return $resultats;
    }


/*   public function array_keys_exists(array $keys, array $arr) {
        return !array_diff_key(array_flip($keys), $arr);
    }*/
} 