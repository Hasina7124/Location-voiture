<?php
include_once '../../BaseDonne/Connexion.php';
include_once './Administration.php';
if(isset($_POST["insertion"])){
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $sexe = $_POST["sexe"];
    $statut = $_POST["statut"];
    $mdp = $_POST["mdp"];
    $confmdp = $_POST["confmdp"];
    $connexion = new Connexion();
    $conn = $connexion->getconnexion();
    $administration = new Administration_($email,$nom,$statut,$sexe,$mdp,$confmdp);
    $administration->AddNewAdministration($conn);
    $conn = null;
    header("Location: ../Acceuil.php");
}