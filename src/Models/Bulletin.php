<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 21:51
 */

namespace App\Models;


class Bulletin {

    private $candidat;
    private $codeBulletin;
    private $status;
    private $sys_user;
    private $sys_compteur;

    function __construct($candidat, $codeBulletin, $status,$sys_user,$sys_compteur)
    {
        $this->candidat = $candidat;
        $this->codeBulletin = $codeBulletin;
        $this->status = $status;
        $this->sys_user = $sys_user;
        $this->sys_compteur = $sys_compteur;
    }

    /**
     * @param mixed $sys_compteur
     */
    public function setSysCompteur($sys_compteur)
    {
        $this->sys_compteur = $sys_compteur;
    }

    /**
     * @return mixed
     */
    public function getSysCompteur()
    {
        return $this->sys_compteur;
    }

    /**
     * @param mixed $sys_user
     */
    public function setSysUser($sys_user)
    {
        $this->sys_user = $sys_user;
    }

    /**
     * @return mixed
     */
    public function getSysUser()
    {
        return $this->sys_user;
    }




    /**
     * @param mixed $candidat
     */
    public function setCandidat($candidat)
    {
        $this->candidat = $candidat;
    }

    /**
     * @return Candidat
     */
    public function getCandidat()
    {
        return $this->candidat;
    }

    /**
     * @param mixed $codeBulletin
     */
    public function setCodeBulletin($codeBulletin)
    {
        $this->codeBulletin = $codeBulletin;
    }

    /**
     * @return mixed
     */
    public function getCodeBulletin()
    {
        return $this->codeBulletin;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }




} 