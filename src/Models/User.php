<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 23/01/19
 * Time: 22:41
 */

namespace App\Models;


class User {
    private $id;
    private $name;
    private $login;
    private $password;
    private $inputNumber;

    function __construct($id, $inputNumber, $login, $name, $password)
    {
        $this->id = $id;
        $this->inputNumber = $inputNumber;
        $this->login = $login;
        $this->name = $name;
        $this->password = $password;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $inputNumber
     */
    public function setInputNumber($inputNumber)
    {
        $this->inputNumber = $inputNumber;
    }

    /**
     * @return mixed
     */
    public function getInputNumber()
    {
        return $this->inputNumber;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }


} 