<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 21:55
 */

namespace App\Dao;


class Connexion
{
    private static $_instance;
    const db_host = 'localhost';
    const db = 'db_anosizato';
    const username = "root";
    const password = "";


    public static function getInstance()
    {
        if (is_null(self::$_instance)) {
            self::$_instance = new \PDO('mysql:host=' . self::db_host . ';dbname=' . self::db, self::username, self::password);
        }
        return self::$_instance;
    }

    private function __construct()
    {
    }
} 