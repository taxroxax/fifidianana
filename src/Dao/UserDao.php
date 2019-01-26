<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 23/01/19
 * Time: 22:45
 */

namespace App\Dao;


use App\Models\User;

class UserDao
{
    private $connexion;

    public function __construct()
    {
        $this->connexion = Connexion::getInstance();
    }


    public function checkUser($login, $password)
    {
        $sql = "SELECT * FROM sys_user where login = ? and password = ?";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array($login, $password));
        $user = null;
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row['ID'], $row['INPUT_NUMBER'], $row['LOGIN'], $row['NAME'], $row['PASSWORD']);
        }
        $statement->closeCursor();
        return $user;
    }

    public function getUserByLogin($login){
        $sql = "SELECT * FROM sys_user where login = ?";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array($login));
        $user = null;
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $user = new User($row['ID'], $row['INPUT_NUMBER'], $row['LOGIN'], $row['NAME'], $row['PASSWORD']);
        }
        $statement->closeCursor();
        return $user;
    }

} 