<?php
include_once '../../BaseDonne/Connexion.php';
include_once './Administration.php';

if(isset($_POST["insertion"])){
    $administration = new Administration();
    $administration->set_email($_POST["email"]);
    $administration->set_nom($_POST["nom"]);
    $administration->set_sexe($_POST["sexe"]);
    $administration->set_statut($_POST["statut"]);
    $administration->set_mdp($_POST["mdp"]);
    $administration->set_confmdp($_POST["confmdp"]);

    $administration->AddNewAdministration();
}