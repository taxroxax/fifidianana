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
use App\Models\Bulletin;
use App\Models\Candidat;

class BulletinController extends Controller{

    public function saveBulletin(){
        $dao = new BulletinDao();
        $candidatDao = new CandidatDao();
        $allCandidat = $candidatDao->getAll();
        $bulletins = $_POST['status'];
        $code = $_POST['code'];
        foreach($bulletins as $bulletinFaritra){
            foreach($bulletinFaritra as $idCandidat => $status){
                $c = new Candidat();
                $c->setId($idCandidat);
                $b = new Bulletin($c,$code,1);
                $dao->save($b);
                $allCandidat = $this->deleteCandidat($allCandidat, $c);
            }
        }

        foreach ($allCandidat as $candidatNotSelected) {
            $b = new Bulletin($candidatNotSelected,$code,0);
            $dao->save($b);
        }

        return $this->redirect('candidat.list');
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
    public function deleteCandidat($allCandidat, $selectedCandidat) {
        $resultats = [];

        foreach($allCandidat as $candidat) {
            if ($selectedCandidat->getId() !== $candidat->getId()) {
                $resultats[] = $candidat;
            }
        }

        return $resultats;
    }
} 