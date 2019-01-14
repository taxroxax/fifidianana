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
} 