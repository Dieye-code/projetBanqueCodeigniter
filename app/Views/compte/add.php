<?php

require_once('./public/web/header.php');
?>

<div class="main">
            <div class="panel-primary">
                <div class="panel-heading">
                    Ajout d'un Compte Client
                </div>
                <div class="panel-body">
                    <form action="add" method="post" id="myForm" novalidate>
                        <div class="infoCompte">
                            <div class="title">Info Compte</div>
                            <div class="form-group">
                                <label for="solde" class="control-label">Clés RIB</label>
                                <input type="text" class="form-control" name="clesRib" id="clesRib">
                            </div>
                            <div class="form-group">
                                <label for="typeCompte" class="control-label">Type de Compte</label>
                                <select name="typeCompte" id="typeCompte" class="form-control">
                                    <option value="0">--Type de Compte</option>
                                    <?php
                                    foreach ($typeComptes as $typeCompte) {
                                    ?>
                                        <option value="<?php echo $typeCompte['id']; ?>"><?php echo $typeCompte['libelle']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group" id="dateDeblocage">
                                <label for="solde" class="control-label">Date Déblocage</label>
                                <input type="date" class="form-control" name="dateDebc" id="dateDebc">
                            </div>
                            <div class="form-group">
                                <label for="solde" class="control-label">Solde</label>
                                <input type="number" class="form-control" name="solde" id="solde" value="0">
                                <span class="alert-danger" id="solde-invalid">Le solde doit etre superieur  à <?php echo $fraisOuverture["montant"]; ?></span>
                                <span class="alert-danger" id="fraisBlocage-invalid">Le solde doit etre superieur  à <?php echo $fraisBlocageOuverture['montant']; ?></span>
                                <span class="alert-danger" id="agios-invalid">Le solde doit etre superieur  à <?php echo $agiosOuverture ["montant"]; ?></span>
                            </div>
                            <div class="form-group" id="fraisBancaire">
                                <label for="frais" class="control-label">Frais Bancaire</label>
                                <span><?php echo $fraisOuverture['montant']; ?></span>
                                <input type="hidden" class="form-control" name="frais" id="frais" value="<?php echo $fraisOuverture['montant']; ?>" >
                            </div>
                            <div class="form-group" id="agiosCompte">
                                <label for="agios" class="control-label">Agios</label>
                                <span><?php echo $agiosOuverture['montant']; ?></span>
                                <input type="hidden" class="form-control" name="agios" id="agios" value="<?php echo $agiosOuverture['montant']; ?>" >
                            </div>
                            <div class="form-group" id="bloqueCompte">
                                <label for="fraisBlocageCompte" class="control-label">Frais Blocage</label>
                                <span><?php echo $fraisBlocageOuverture['montant']; ?></span>
                                <input type="hidden" class="form-control" name="fraisBlocageCompte" id="fraisBlocageCompte" value="<?php echo $fraisBlocageOuverture['montant']; ?>" >
                            </div>
                            <div class="form-group" id="typeClientSelect">
                                <label for="typeClient" class="control-label">Type Client</label>
                                <select name="typeClient" id="typeClient" class="form-control">
                                    <option value="0">--Type Client--</option>
                                    <option value="1">Client Physique</option>
                                    <option value="2">Client Moral</option>
                                </select>
                            </div>
                            <div class="form-group" id="typeClientPhysiqueSelect">
                                <label for="typeClientPhysique" class="control-label">Type Client
                                    Physique</label>
                                <select name="typeClientPhysique" id="typeClientPhysique" class="form-control">
                                    <option value="1">Non Salarié</option>
                                    <option value="2">Salarié</option>
                                </select>
                            </div>
                            <div class="infoClientPhysique" id="infoClientPhysique">
                                <div class="form-group">
                                    <label for="solde" class="control-label">Client Non Salarié</label>
                                    <select name="idClientNormal" id="idClientNormal" class="form-control">
                                        <option value="0">--Client--</option>
                                        <?php
                                        foreach ($clientPhysiquesimple as $clientP) {
                                        ?>
                                            <option value="<?php echo $clientP['id']; ?>"><?php echo $clientP['prenom'].' '.$clientP['nom']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="infoClientPhysiqueSalarie" id="infoClientPhysiqueSalarie">
                                <div class="form-group">
                                    <label for="solde" class="control-label">Client Salarié</label>
                                    <select name="idClientSalarie" id="idClientSalarie" class="form-control">
                                        <option value="0">--Client--</option>
                                        <?php
                                        foreach ($clientPhysiquesalarie as $clientP) {
                                        ?>
                                            <option value="<?php echo $clientP['id']; ?>"><?php echo $clientP['prenom'].' '.$clientP['nom']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="infoClientEntreprise" id="infoClientEntreprise">
                                <div class="form-group">
                                    <label for="solde" class="control-label">Client</label>
                                    <select name="idEmployeur" id="idEmployeur" class="form-control">
                                        <option value="0">--Entreprise--</option>
                                        <?php
                                        foreach ($clientMorals as $clientMoral) {
                                        ?>
                                            <option value="<?php echo $clientMoral['id']; ?>"><?php echo $clientMoral['nom']; ?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <input type="submit" class="btn-primary" name="ajouter" value="Ajouter">

                    </form>
                </div>
            </div>
        </div>

<script src="./../public/js/compte.js"></script>

<?php
require_once('./public/web/footer.php');
?>