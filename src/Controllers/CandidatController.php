<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 23:04
 */

namespace App\Controllers;
use App\Dao\CandidatDao;

class CandidatController extends Controller {

    public function listAction(){
        $dao = new CandidatDao();
        $list = $dao->findAll();
        $quartier = array_keys($list);
        $genre = array_keys($list[$quartier[0]]);
        return $this->render('candidat/index',array('list'=>$list,'quartier'=>$quartier,'genre'=>$genre));
    }
} 