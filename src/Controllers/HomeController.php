<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 22:38
 */

namespace App\Controllers;


class HomeController extends Controller {

    public function index(){
        return $this->render('candidat/index',array('name'=>'karenjy'));
    }

    public function hello(){
        return "hello";
    }

} 