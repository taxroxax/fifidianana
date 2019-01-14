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

    function __construct($candidat, $codeBulletin, $status)
    {
        $this->candidat = $candidat;
        $this->codeBulletin = $codeBulletin;
        $this->status = $status;
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