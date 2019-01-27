<?php
/**
 * Created by PhpStorm.
 * User: RAJAONARILALA
 * Date: 27/01/19
 * Time: 00:33
 */

namespace App\Dao;



use App\Models\Verification;

class VerificationDao {
    private $connexion;

    public function __construct()
    {
        $this->connexion = Connexion::getInstance();
    }

    public function getKoAll()
    {
        $sql = "select v.* from verification_bulletin v where status_bulletin = ?";
        $statement = $this->connexion->prepare($sql);
        $statement->execute(array('KO'));
        $all = [];
        while ($row = $statement->fetch(\PDO::FETCH_ASSOC)) {
            $verification = new Verification($row['CODE_BULLETIN'],$row['COMMENT'],$row['EQUIPE_SAISIE'],$row['STATUS_BULLETIN']);
            $all[] = $verification;
        }
        return $all;
    }



    public function save(Verification $verification)
    {
        $sql = "INSERT INTO verification_bulletin(code_bulletin,status_bulletin,equipe_saisie,comment) VALUES (?,?,?,?)";
        $statement = $this->connexion->prepare($sql);
        $id = $statement->execute(array($verification->getCodeBulletin(),$verification->getStatusBulletin(),$verification->getEquipeSaisie(),$verification->getComment()));
        return $id;
    }

} 