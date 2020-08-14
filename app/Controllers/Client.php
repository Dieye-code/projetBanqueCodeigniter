<?php

namespace App\Controllers;

require_once ("./app/entities/eclientMoral.php");
require_once ("./app/entities/eclientPhysique.php");
require_once ("./app/Models/ClientDb.php");

use CodeIgniter\Controller;

class Client extends  Controller
{

    public function  add(){
        if(isset($_POST['ajouter'])){
            extract($_POST);
            $clientDb = new \ClientDb();

            if ($typeClient == '2') {
                $clientMoral = new \EClientMoral();
                $clientMoral->setRaisonSocial($raisonSocial);
                $clientMoral->setAdresse($AdresseClientMoral);
                $clientMoral->setNom($nomClientMoral);
                $clientMoral->setNumero($numeroClientMoral);
                $clientMoral->setTelephone($telephoneClientMoral);
                $clientMoral->setLogin($loginClientMoral);
                $clientMoral->setPassword($passwordClientMoral);
                $clientMoral->setEmail($emailClientMoral);

                // var_dump($clientMoral);
                // die;

                $a = $clientDb->addClientMoral($clientMoral);
                var_dump($a);
            } else {
                if ($typeClientPhysique == '2' && $idEmployeur == '0') {
                    $clientMoral = new \EClientMoral();
                    $clientMoral->setRaisonSocial($raisonSocial);
                    $clientMoral->setAdresse($AdresseClientMoral);
                    $clientMoral->setNom($nomClientMoral);
                    $clientMoral->setNumero($numeroClientMoral);
                    $clientMoral->setTelephone($telephoneClientMoral);
                    $clientMoral->setLogin($loginClientMoral);
                    $clientMoral->setPassword($passwordClientMoral);
                    $clientMoral->setEmail($emailClientMoral);

                    $a = $clientDb->addClientMoral($clientMoral);

                    $idClientMoral = $a;
                } else {
                    $idClientMoral = $idEmployeur!= '0' ?  $idEmployeur : NULL;
                }



                $clientPhysique = new \EClientPhysique();

                $clientPhysique->setNom($nom);
                $clientPhysique->setPrenom($prenom);
                $clientPhysique->setNci($cni);
                $clientPhysique->setTelephone($telephone);
                $clientPhysique->setAdresse($adresse);
                $clientPhysique->setSalaire($salaire != '' ? $salaire : Null);
                $clientPhysique->setEmail($email != '' ? $email : Null);
                $clientPhysique->setProfession($profession != '' ? $profession : Null);
                $clientPhysique->setLogin($login);
                $clientPhysique->setPassword($password);
                $clientPhysique->setIdClientMoral($idClientMoral);
                $clientPhysique->setIdTypeClient($typeClientPhysique);

                $a = $clientDb->addClientPhysique($clientPhysique);

                var_dump($a);


            }

        } else {

            $clientDb = new \ClientDb();
            $data['clientMorals'] = $clientDb->listeClientMorals();
            $typeClientDb = new \CompteDb();
            $data['typeClients'] = $typeClientDb->listeTypeClients();
            return view("client/add",$data);
            
        }
    }
}