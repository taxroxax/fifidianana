<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 23/01/19
 * Time: 21:51
 */

namespace App\Controllers;


use App\Dao\CandidatDao;

class GlobalResultController extends Controller
{
    public function globalResult()
    {
        session_start();
        if ($_SESSION['username'] != null) {
            $dao = new CandidatDao();
            $result = $dao->displayResult(true);

            if(!empty($result)){
                $quartier = array_keys($result);
                sort($quartier);
                $genre = array_keys($result[$quartier[0]]);
                return $this->render('candidat/result', array('result' => $result, 'quartier' => $quartier, 'genre' => $genre));
            }else{

                return $this->render('candidat/result', array('message' => 'Mbola tsy nisy fanisana vita'));
            }
        } else return $this->redirect('login.show');
    }
} 