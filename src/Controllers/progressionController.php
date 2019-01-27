<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 27/01/19
 * Time: 06:48
 */

namespace App\Controllers;


use App\Dao\BulletinDao;

class progressionController  extends Controller{
    public function displayProgression(){
        session_start();
        if ($_SESSION['username'] != null) {
            $dao = new BulletinDao();
            $list = $dao->progressionSaisie();
            return $this->render('candidat/progression', array('list' => $list));
        } else return $this->redirect('login.show');
    }
} 