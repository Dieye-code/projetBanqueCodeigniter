<?php


class CompteDb
{
    private $db;

    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }

    public function addCompte(ECompte $compte){
        $sql = "INSERT INTO `compte`(`id`, `numero`, `clerib`, `solde`, `etat`, `dateDeboc`, `dateCreat`, `dateFermetureTemp`, `dateReouverture`, `idClientPhysique`, `idClientMoral`, `idTypeCompte`) VALUES (NULL,:numero:,:cleRib:,:solde:,:etat:,:dateDebc:,:dateCreat:,:dateFermetureTemp:,:dateReouverture:,:idClientPhysique:,:idClientmoral:,:idtypeCompte:)";

         $this->db->query($sql,$compte->getParam());
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
        return $this->db->query('SELECT * FROM clientphysique')->getResultArray();
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

    public function listeTypeClients(){
        return $this->db->query('SELECT * FROM typeclient')->getResultArray();
    }

    public function listeTypeComptes(){
        return $this->db->query('SELECT * FROM typecompte')->getResultArray();
    }

    public function listeTypeFrais(){
        return $this->db->query('SELECT * FROM typefrais')->getResultArray();
    }

    public function getFrais($libelle){
        return $this->db->query("SELECT * FROM typefrais WHERE libelle='$libelle'")->getResultArray()[0];
    }
}