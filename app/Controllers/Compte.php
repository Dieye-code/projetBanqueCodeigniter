<?php


namespace App\Controllers;

require_once ("./app/entities/ecompte.php");
require_once ("./app/Models/CompteDb.php");

use CodeIgniter\Controller;

class Compte extends  Controller
{

    public function  add(){
        $compteDb = new \CompteDb();

        $data['clientMorals'] = $compteDb->listeClientMorals();
        $data['typeComptes'] = $compteDb->listeTypeComptes();
        $data['typeFrais'] = $compteDb->listeTypeFrais();
        $data['clientPhysiques'] = $compteDb->listeClienntPhysique();
        $data['clientPhysiquesalarie'] = $compteDb->listeClienntPhysiqueSalarie();
        $data['clientPhysiquesimple'] = $compteDb->listeClienntPhysiqueNonSalarie();
        $data['agiosOuverture'] = $compteDb->getFrais("Agios");
        $data['fraisOuverture'] = $compteDb->getFrais("Frais ouverture");
        $data['fraisBlocageOuverture'] = $compteDb->getFrais("Frais Blocage");
//        var_dump($data['fraisOuverture']);
//        die;

        if(isset($_POST['ajouter'])){
            extract($_POST);
            if ($typeCompte == '1') {
                $solde = $solde - $frais;
            } else {
                if ($typeCompte == '4') {

                    $solde = $solde - $fraisBlocageCompte;
                }
            }
            $idClientphysique = NULL;
            if ($idClientNormal != '0' || $idClientSalarie != '0') {
                $idClientphysique = $idClientNormal != '0' ? (int) $idClientNormal : (int) $idClientSalarie;
            }

            $compte = new \ECompte();

            $compte->setNumero($clesRib);
            $compte->setClerib($clesRib);
            $compte->setSolde($solde);
            $compte->setEtat('actif');
            $compte->setDateDeboc($dateDebc != '' ? $dateDebc : NULL);
            $compte->setDateCreat(date('Y-m-d'));
            $compte->setIdClientPhysique($idClientphysique);
            $compte->setIdClientMoral($idEmployeur != 0 ? $idEmployeur : null);
            $compte->setIdTypeCompte($typeCompte);

            $a = $compteDb->addCompte($compte);

            if ($a != 0) {
                echo "Compte bien ajoute";
            } else {
                echo "Echec de l'ajout du Compte";
            }
            die;
        }else{

            return view("compte/add",$data);
        }
    }
}