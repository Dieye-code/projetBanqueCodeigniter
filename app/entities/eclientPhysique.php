<?php


class EClientPhysique
{
    private $id;
    private $nom;
    private $prenom;
    private $nci;
    private $telephone;
    private $adresse;
    private $salaire;
    private $profession;
    private $email;
    private $login;
    private $password;
    private $idTypeClient;
    private $idClientMoral;

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
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set the value of prenom
     */ 
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

    /**
     * Get the value of nci
     */ 
    public function getNci()
    {
        return $this->nci;
    }

    /**
     * Set the value of nci
     */ 
    public function setNci($nci)
    {
        $this->nci = $nci;
    }

    /**
     * Get the value of telephone
     */ 
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set the value of telephone
     */ 
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;
    }

    /**
     * Get the value of adresse
     */ 
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set the value of adresse
     */ 
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;
    }

    /**
     * Get the value of salaire
     */ 
    public function getSalaire()
    {
        return $this->salaire;
    }

    /**
     * Set the value of salaire
     */ 
    public function setSalaire($salaire)
    {
        $this->salaire = $salaire;
    }

    /**
     * Get the value of profession
     */ 
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Set the value of profession
     */ 
    public function setProfession($profession)
    {
        $this->profession = $profession;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     */ 
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     */ 
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     */ 
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * Get the value of idTypeClient
     */ 
    public function getIdTypeClient()
    {
        return $this->idTypeClient;
    }

    /**
     * Set the value of idTypeClient
     */ 
    public function setIdTypeClient($idTypeClient)
    {
        $this->idTypeClient = $idTypeClient;
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

    public function getParam(){
        return [
            'nom'=>$this->nom,
            'prenom'=>$this->prenom,
            'nci'=>$this->nci,
            'telephone'=>$this->telephone,
            'adresse'=>$this->adresse,
            'salaire'=>$this->salaire,
            'profession'=>$this->profession,
            'email'=>$this->email,
            'login'=>$this->login,
            'password'=>$this->password,
            'idClientMoral'=>$this->idClientMoral,
            'idTypeClient'=>$this->idTypeClient
        ];
    }
}
