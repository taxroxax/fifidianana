<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 12/01/19
 * Time: 00:51
 */

namespace App\Controllers;


use App\Dao\BulletinDao;
use App\Models\Bulletin;
use App\Models\Candidat;

class BulletinController extends Controller{

    public function saveBulletin(){
        $dao = new BulletinDao();
        $bulletins = $_POST['status'];
        $code = $_POST['code'];
        foreach($bulletins as $bulletinFaritra){
            foreach($bulletinFaritra as $idCandidat => $status){
                $c = new Candidat();
                $c->setId($idCandidat);
                $b = new Bulletin($c,$code,1);
                $dao->save($b);
            }
        }
        return $this->redirect('candidat.list');
    }

} 