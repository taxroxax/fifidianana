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

class CandidatDao {


    private $connexion;

    public function __construct(){
        $this->connexion = Connexion::getInstance();
    }

    public function findAll(){
        $sql = "SELECT * FROM candidat";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $all = [];
        while($row = $statement->fetch(\PDO::FETCH_ASSOC)){
            $candidat = new Candidat($row['CODE_QUARTIER'],$row['GENRE'],$row['ID_CANDIDAT'],$row['NOM'],$row['NUM_CARTE'],$row['RANG']);
            $all[$row['CODE_QUARTIER']][$row['GENRE']][] = $candidat;
        }
        return $all;
    }

    public function getAll(){
        $sql = "SELECT * FROM candidat";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $all = [];
        while($row = $statement->fetch(\PDO::FETCH_ASSOC)){
            $candidat = new Candidat($row['CODE_QUARTIER'],$row['GENRE'],$row['ID_CANDIDAT'],$row['NOM'],$row['NUM_CARTE'],$row['RANG']);
            $all[] = $candidat;
        }
        return $all;
    }

    public function displayResult(){
        $sql = "SELECT  b.ID_CANDIDAT,c.NOM , c.CODE_QUARTIER ,COUNT(b.CODE_BULLETIN) AS vote FROM bulletin b LEFT JOIN candidat c ON c.ID_CANDIDAT=b.ID_CANDIDAT WHERE b.status = 1 GROUP BY b.ID_CANDIDAT ORDER BY vote DESC";
        $statement = $this->connexion->prepare($sql);
        $statement->execute();
        $all = array();
        while($row = $statement->fetch(\PDO::FETCH_ASSOC)){
            $candidat = new Candidat();
            $candidat->setCodeQuartier($row['CODE_QUARTIER']);
            $candidat->setNom($row['NOM']);
            $candidat->setId($row['ID_CANDIDAT']);

            $all[] = array('candidat'=>$candidat,'vote'=>$row['vote']);
        }
        return $all;
    }
} 