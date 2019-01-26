<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 26/01/19
 * Time: 10:40
 */

namespace App\Dao;


use App\Models\Contrainte;

class ContrainteDao {
    private $connexion;

    public function __construct()
    {
        $this->connexion = Connexion::getInstance();
    }

    public function getContrainteByQuartier($quartierid)
    {
        $sql = "SELECT * FROM sys_contrainte c WHERE c.QUARTIER = ?";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array($quartierid));
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $contrainte = new Contrainte($row['GENRE'],$row['ID'],$row['NOMBRE_MAX'],$row['QUARTIER']);
            $all[] = $contrainte;
           // $all[$row['QUARTIER']][$row['GENRE']][$row['NOMBRE_MAX']][] = $contrainte;
        }
        return $all;
    }
} 