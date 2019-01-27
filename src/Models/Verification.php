<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 26/01/19
 * Time: 20:07
 */

namespace App\Models;


class Verification {
        private $code_bulletin;
        private $status_bulletin;
        private $equipe_saisie;
        private $comment;

    function __construct($code_bulletin, $comment, $equipe_saisie, $status_bulletin)
    {
        $this->code_bulletin = $code_bulletin;
        $this->comment = $comment;
        $this->equipe_saisie = $equipe_saisie;
        $this->status_bulletin = $status_bulletin;
    }

    /**
     * @param mixed $code_bulletin
     */
    public function setCodeBulletin($code_bulletin)
    {
        $this->code_bulletin = $code_bulletin;
    }

    /**
     * @return mixed
     */
    public function getCodeBulletin()
    {
        return $this->code_bulletin;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $equipe_saisie
     */
    public function setEquipeSaisie($equipe_saisie)
    {
        $this->equipe_saisie = $equipe_saisie;
    }

    /**
     * @return mixed
     */
    public function getEquipeSaisie()
    {
        return $this->equipe_saisie;
    }

    /**
     * @param mixed $status_bulletin
     */
    public function setStatusBulletin($status_bulletin)
    {
        $this->status_bulletin = $status_bulletin;
    }

    /**
     * @return mixed
     */
    public function getStatusBulletin()
    {
        return $this->status_bulletin;
    }



} 