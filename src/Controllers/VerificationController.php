<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 27/01/19
 * Time: 01:30
 */

namespace App\Controllers;


use App\Dao\VerificationDao;

class VerificationController extends Controller {
    public function verificationAction()
    {
        session_start();
        if ($_SESSION['username'] != null) {
         return $this->render('candidat/index');
        }
    }

    public function listkoAction()
    {
        session_start();
        if ($_SESSION['username'] != null) {
            $dao = new VerificationDao();
            $result = $dao->getKoAll();
            if(!empty($result)){
                return $this->render('candidat/votePerdu', array('result' => $result));
            }else{

                return $this->render('candidat/votePerdu', array('message' => 'Mbola tsy nisy fanisana vita'));
            }


        } else return $this->redirect('login.show');
    }
} 