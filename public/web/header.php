<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="La gestion de  la Banque du peuple" />
    <meta name="author" content="moustaphadieye96@gmail.com" />
    <meta name="keywords" content="Banque, Client, Compte" />
    <title> <?= $title ?? 'Banque du peuple'?></title>
    <link rel="stylesheet" href="./../public/css/file.css">
</head>

<body>
    <!--le header de la Page-->
    <div class="header">
        <a href="#">
            <span class="logo_1">BANQUE DU</span> <span class="logo_2">PEUPLE</span>
        </a>
    </div>

    <!--Le Contenu de la page-->
    <div class="container">
        <!--Le side Bare-->
        <div class="sideBare">
            <div class="sideBare_header">
                <img src="./../public/images/profil.png" alt="Profil" class="profil">
                <span class="email">moustaphadieye96@gmail.com</span>
            </div>
            <div class="sideBare_body">
                <div class="nav active"><a href="#">Dashboard</a></div>
                <div class="nav "><a href="http://localhost/banqueDuPeupleMVC/compte/add">Compte</a></div>
                <div class="nav "><a href="http://localhost/banqueDuPeupleMVC/client/add">Client</a></div>
            </div>
        </div>
        <!--Le main de la page-->
        <div class="main">