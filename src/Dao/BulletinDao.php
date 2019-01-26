<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 11/01/19
 * Time: 22:06
 */

namespace App\Dao;

use App\Dao\Connexion;
use App\Models\Bulletin;
use App\Models\Candidat;

class BulletinDao
{

    private $connexion;

    public function __construct()
    {
        $this->connexion = Connexion::getInstance();
    }

    public function getAll()
    {
        $sql = "SELECT b.code_bulletin,status,c.* FROM Bulletin b JOIN Candidat c ON b.id_candidat = c.id_candidat";
        $statement = $this->connexion->prepare($sql);
        $statement->execute($statement);
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $candidat = new Candidat($row['code_quartier'], $row['genre'], $row['id_candidat'], $row['nom'], $row['num_carte'], $row['rang']);
            $bulletin = new Bulletin($candidat, $row['code_bulletin'], $row['status'], $row['sys_user_id'], $row['sys_compteur']);
            $all[] = $bulletin;
        }
        return $all;
    }

    public function save(Bulletin $bulletin)
    {
        $sql = "INSERT INTO bulletin(id_candidat,code_bulletin,status,sys_user_id,sys_compteur) VALUES (?,?,?,?,?)";
        $statement = $this->connexion->prepare($sql);
        $id = $statement->execute(array($bulletin->getCandidat()->getId(), $bulletin->getCodeBulletin(), $bulletin->getStatus(),$bulletin->getSysUser(),$bulletin->getSysCompteur()));
        return $id;
    }

    public function getLastInsertedByUser($userid)
    {
        $sql = "SELECT MAX(b.SYS_COMPTEUR) AS compteur FROM Bulletin b WHERE b.SYS_USER_ID = ?";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array($userid));
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $all[] = $row['compteur'];
        }
        return $all;
    }
} 