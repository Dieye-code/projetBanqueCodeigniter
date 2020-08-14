<?php


class ECompte
{
    private $id;
    private $numero;
    private $clerib;
    private $solde;
    private $etat;
    private $dateDeboc;
    private $dateCreat;
    private $dateFermetureTemp;
    private $dateReouverture;
    private $idClientPhysique;
    private $idClientMoral;
    private $idTypeCompte;


    public function getParam(){
        return [
            'numero'=>$this->numero,
            'cleRib'=>$this->clerib,
            'solde'=> $this->solde,
            'etat'=>$this->etat,
            'dateDebc'=>$this->dateDeboc,
            'dateCreat'=>$this->dateCreat,
            'dateFermetureTemp'=>$this->dateFermetureTemp,
            'dateReouverture'=>$this->dateReouverture,
            'idClientPhysique'=>$this->idClientPhysique,
            'idClientmoral'=>$this->idClientMoral,
            'idtypeCompte'=>$this->idTypeCompte
        ];
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     */ 
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get the value of numero
     */ 
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Set the value of numero
     */ 
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     * Get the value of clerib
     */ 
    public function getClerib()
    {
        return $this->clerib;
    }

    /**
     * Set the value of clerib
     */ 
    public function setClerib($clerib)
    {
        $this->clerib = $clerib;
    }

    /**
     * Get the value of solde
     */ 
    public function getSolde()
    {
        return $this->solde;
    }

    /**
     * Set the value of solde
     */ 
    public function setSolde($solde)
    {
        $this->solde = $solde;
    }

    /**
     * Get the value of etat
     */ 
    public function getEtat()
    {
        return $this->etat;
    }

    /**
     * Set the value of etat
     */ 
    public function setEtat($etat)
    {
        $this->etat = $etat;
    }

    /**
     * Get the value of dateDeboc
     */ 
    public function getDateDeboc()
    {
        return $this->dateDeboc;
    }

    /**
     * Set the value of dateDeboc
     */ 
    public function setDateDeboc($dateDeboc)
    {
        $this->dateDeboc = $dateDeboc;
    }

    /**
     * Get the value of dateCreat
     */ 
    public function getDateCreat()
    {
        return $this->dateCreat;
    }

    /**
     * Set the value of dateCreat
     */ 
    public function setDateCreat($dateCreat)
    {
        $this->dateCreat = $dateCreat;
    }

    /**
     * Get the value of dateFermetureTemp
     */ 
    public function getDateFermetureTemp()
    {
        return $this->dateFermetureTemp;
    }

    /**
     * Set the value of dateFermetureTemp
     */ 
    public function setDateFermetureTemp($dateFermetureTemp)
    {
        $this->dateFermetureTemp = $dateFermetureTemp;
    }

    /**
     * Get the value of dateReouverture
     */ 
    public function getDateReouverture()
    {
        return $this->dateReouverture;
    }

    /**
     * Set the value of dateReouverture
     */ 
    public function setDateReouverture($dateReouverture)
    {
        $this->dateReouverture = $dateReouverture;
    }

    /**
     * Get the value of idClientPhysique
     */ 
    public function getIdClientPhysique()
    {
        return $this->idClientPhysique;
    }

    /**
     * Set the value of idClientPhysique
     */ 
    public function setIdClientPhysique($idClientPhysique)
    {
        $this->idClientPhysique = $idClientPhysique;
    }

    /**
     * Get the value of idClientMoral
     */ 
    public function getIdClientMoral()
    {
        return $this->idClientMoral;
    }

    /**
     * Set the value of idClientMoral
     */ 
    public function setIdClientMoral($idClientMoral)
    {
        $this->idClientMoral = $idClientMoral;
    }

    /**
     * Get the value of idTypeCompte
     */ 
    public function getIdTypeCompte()
    {
        return $this->idTypeCompte;
    }

    /**
     * Set the value of idTypeCompte
     */ 
    public function setIdTypeCompte($idTypeCompte)
    {
        $this->idTypeCompte = $idTypeCompte;
    }
}
