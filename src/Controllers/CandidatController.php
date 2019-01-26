<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 23:04
 */

namespace App\Controllers;

use App\Dao\CandidatDao;
use App\Dao\ContrainteDao;

class CandidatController extends Controller
{

    public function listAction()
    {
        session_start();
        if ($_SESSION['username'] != null) {
            $dao = new CandidatDao();
            $list = $dao->findAll();
            $quartier = array_keys($list);
            $genre = array_keys($list[$quartier[0]]);

            $tmpContrainteQuartier = [];
            foreach($quartier as $q){
                $contrainteDao = new ContrainteDao();
                $listContrainte = $contrainteDao->getContrainteByQuartier($q);
                $tmpContrainteQuartier[] = $listContrainte;
            }
            return $this->render('candidat/index', array('list' => $list, 'quartier' => $quartier, 'genre' => $genre , 'contrainte' =>$tmpContrainteQuartier));
        } else return $this->redirect('login.show');
    }

    public function resultatAction()
    {
        session_start();
        if ($_SESSION['username'] != null) {
            $dao = new CandidatDao();
            $result = $dao->displayResult();
            $quartier = array_keys($result);
            sort($quartier);
            $genre = array_keys($result[$quartier[0]]);
            return $this->render('candidat/result', array('result' => $result, 'quartier' => $quartier, 'genre' => $genre));
        } else return $this->redirect('login.show');
    }
} 