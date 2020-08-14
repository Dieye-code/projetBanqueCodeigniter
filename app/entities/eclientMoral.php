<?php



class EClientMoral
{
    private $id;
    private $raisonSocial;
    private $adresse;
    private $nom;
    private $numero;
    private $telephone;
    private $email;
    private $login;
    private $password;
    

    public function getParam(){
        return [
            'raisonSocial'=>$this->raisonSocial,
            'adresse'=>$this->adresse,
            'nom'=>$this->nom,
            'numero'=>$this->numero,
            'telephone'=>$this->telephone,
            'email'=>$this->email,
            'login'=>$this->login,
            'password'=>$this->password
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
     * Get the value of raisonSocial
     */ 
    public function getRaisonSocial()
    {
        return $this->raisonSocial;
    }

    /**
     * Set the value of raisonSocial
     */ 
    public function setRaisonSocial($raisonSocial)
    {
        $this->raisonSocial = $raisonSocial;
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
}
