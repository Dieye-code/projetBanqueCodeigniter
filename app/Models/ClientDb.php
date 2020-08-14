<?php


/**
 * Class ClientDb
 */
class ClientDb
{

    /**
     * @var array|\CodeIgniter\Database\BaseConnection|string|null
     */
    private $db;

    /**
     * ClientDb constructor.
     */
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    /**
     * @param EClientPhysique $clientPhysique
     * @return bool|\CodeIgniter\Database\BaseResult|\CodeIgniter\Database\Query|false
     */
    public function  addClientPhysique(EClientPhysique $clientPhysique){

        $sql = "INSERT INTO `clientphysique`(`id`, `nom`, `prenom`, `nci`, `telephone`, `adresse`, `salaire`, `profession`, `email`, `login`, `password`, `idTypeClient`, `idClientMoral`) VALUES (NULL,:nom:,:prenom:,:nci:,:telephone:,:adresse:,:salaire:,:profession:,:email:,:login:,:password:,:idTypeClient:,:idClientMoral:)";
        $a = $this->db->query($sql,$clientPhysique->getParam());
        return $this->db->insertID();

    }

    /**
     * @param EClientMoral $clientMoral
     * @return bool|\CodeIgniter\Database\BaseResult|\CodeIgniter\Database\Query|false
     */
    public function  addClientMoral(EClientMoral $clientMoral){

        $sql = "INSERT INTO `clientmoral` (`id`, `raisonSocial`, `adresse`, `nom`, `numero`, `telephone`,  `email`, `login`, `password`) VALUES (NULL,:raisonSocial:,:adresse:,:nom:,:numero:,:telephone:,:email:,:login:,:password:)";
        $a = $this->db->query($sql,$clientMoral->getParam());
        return $this->db->insertID();

    }

    /**
     * @return array|array[]|object[]
     */
    public function listeClientMorals()
    {
        return $this->db->query('SELECT * FROM clientmoral')->getResultArray();
    }

    /**
     * @return array|array[]|object[]
     */
    public function listeClienntPhysique(){
        return $this->db->query('SELECT * FROM clientphysique')->getResult();
    }

    /**
     * @return array|array[]|object[]
     */
    public function listeClienntPhysiqueSalarie(){
        return $this->db->query('SELECT * FROM clientphysique WHERE idClientMoral IS NOT NULL')->getResultArray();
    }

    /**
     * @return array|array[]|object[]
     */
    public function listeClienntPhysiqueNonSalarie(){
        return $this->db->query('SELECT * FROM clientphysique WHERE idClientMoral IS NULL')->getResultArray();

    }


}