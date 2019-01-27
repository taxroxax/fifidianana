<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 23:02
 */

namespace App\Dao;

use App\Dao\Connexion;
use App\Models\Candidat;

class CandidatDao
{


    private $connexion;

    public function __construct()
    {
        $this->connexion = Connexion::getInstance();
    }

    public function findAll()
    {
        $sql = "SELECT * FROM candidat";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $candidat = new Candidat($row['CODE_QUARTIER'], $row['GENRE'], $row['ID_CANDIDAT'], $row['NOM'], $row['NUM_CARTE'], $row['RANG']);
            $all[$row['CODE_QUARTIER']][$row['GENRE']][] = $candidat;
        }
        return $all;
    }

    public function getAll()
    {
        $sql = "SELECT * FROM candidat";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $candidat = new Candidat($row['CODE_QUARTIER'], $row['GENRE'], $row['ID_CANDIDAT'], $row['NOM'], $row['NUM_CARTE'], $row['RANG']);
            $all[] = $candidat;
        }
        return $all;
    }


    public function checkBulletinByCode($code){
        $sql = "SELECT c.ID_CANDIDAT,c.CODE_QUARTIER,c.GENRE,c.RANG FROM bulletin b INNER JOIN candidat c ON c.id_candidat = b.id_candidat 	WHERE b.code_bulletin = ?";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array($code));
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $verification = new Candidat($row['CODE_QUARTIER'],$row['GENRE'],$row['ID_CANDIDAT'],null,null,$row['RANG']);
            $all[$row['CODE_QUARTIER']][$row['GENRE']][] = $verification;
        }
        return $all;
    }



    public function displayResult($params = false)
    {

        if(!$params){
            $sql = "SELECT  b.ID_CANDIDAT,c.NOM , c.CODE_QUARTIER, c.GENRE ,SUM(b.STATUS) AS vote FROM bulletin b LEFT JOIN candidat c ON c.ID_CANDIDAT=b.ID_CANDIDAT  GROUP BY b.ID_CANDIDAT ORDER BY vote DESC,c.NOM";
            $statement = $this->connexion->prepare($sql);
            $statement->execute();
            $all = array();
            while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
                $candidat = new Candidat();
                $candidat->setCodeQuartier($row['CODE_QUARTIER']);
                $candidat->setNom($row['NOM']);
                $candidat->setId($row['ID_CANDIDAT']);
                $all[$row['CODE_QUARTIER']][$row['GENRE']][] = array('candidat' => $candidat, 'vote' => $row['vote']);
            }
            return $all;
        }else{
            $sql = "SELECT  b.ID_CANDIDAT,c.NOM , c.CODE_QUARTIER, c.GENRE ,SUM(b.STATUS) AS vote FROM bulletin b
                    INNER JOIN candidat c ON c.ID_CANDIDAT=b.ID_CANDIDAT
                    LEFT JOIN verification_bulletin vb ON vb.code_bulletin=b.code_bulletin
                    WHERE vb.status_bulletin != ?
                     GROUP BY b.ID_CANDIDAT ORDER BY vote DESC,c.NOM";
            $statement = $this->connexion->prepare($sql);
            $statement->execute(array('KO'));
            $all = array();
            while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
                $candidat = new Candidat();
                $candidat->setCodeQuartier($row['CODE_QUARTIER']);
                $candidat->setNom($row['NOM']);
                $candidat->setId($row['ID_CANDIDAT']);
//            $all[] = array('candidat'=>$candidat,'vote'=>$row['vote']);
                $all[$row['CODE_QUARTIER']][$row['GENRE']][] = array('candidat' => $candidat, 'vote' => $row['vote']);
               /* if (!$params)
                    $all[$row['CODE_QUARTIER']][$row['GENRE']][] = array('candidat' => $candidat, 'vote' => $row['vote']);
                else
                    $all[$row['GENRE']][] = array('candidat' => $candidat, 'vote' => $row['vote']);*/
            }
            return $all;
        }


    }


} 