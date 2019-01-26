<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 23/01/19
 * Time: 10:07
 */

namespace App\Controllers;


use App\Dao\UserDao;

class LoginController extends Controller
{
    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $userDao = new UserDao();
            $user = $userDao->checkUser($username, $password);
            if ($user) {
                session_start();
                $_SESSION['username'] = $user->getName();
                $_SESSION['login'] = $user->getLogin();
                return $this->redirect('candidat.list');
            } else {
                return $this->render('login/login', array('message' => 'Tsy mety an'));
            }
        }
        return $this->render('login/login');
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();
        return $this->redirect('login.show');
    }
} 