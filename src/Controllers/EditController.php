<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 26/01/19
 * Time: 13:52
 */

namespace App\Controllers;


class EditController extends Controller {

    public function editAction()
    {
        session_start();
        if ($_SESSION['username'] != null) {

            return $this->render('candidat/edit');
        } else return $this->redirect('login.show');
    }
} 