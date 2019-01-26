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
            $list = $dao->displayResult(true);
            $genre = array_keys($list);
            return $this->render('candidat/globalResult', array('list' => $list, 'genre' => $genre));
        } else return $this->redirect('login.show');
    }
} 