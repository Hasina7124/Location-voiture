<?php
include_once '../../BaseDonne/Connexion.php';
include_once './Administration.php';
$erreur = "";
$emailError = "";
$nomerror ="";


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $email = $_POST["email"];
    $nom = $_POST["nom"];
    $sexe = $_POST["sexe"];
    $statut = $_POST["statut"];
    $mdp = $_POST["mdp"];
    $confmdp = $_POST["confmdp"];

    if(empty($_POST["email"]) || empty($_POST["nom"]) || empty($_POST["sexe"]) || empty($_POST["statut"]) || empty($_POST["mdp"]) || empty($_POST["confmdp"])){
        $erreur = "Veuillez complétez toute les formulaire";
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailError = "Veuillez entrer une adresse e-mail valide.";
        }else{
            if(!preg_match("/^[a-zA-Z-' ]*$/", $_POST["nom"])){
                $nomerror = "Nom incorrect";
            }
            else{
                $administration = new Administration();
                $administration->set_email($email);
                $administration->set_nom($nom);
                $administration->set_sexe($sexe);
                $administration->set_statut($statut);
                $administration->set_mdp($mdp);
                $administration->set_confmdp($confmdp);

                $administration->AddNewAdministration();
            }
            
        }
    }
}

//Pour tester
function test_input($data) {
    $data = trim($data);           // Enlève les espaces en début et fin de chaîne
    $data = stripslashes($data);   // Enlève les antislashs (\)
    $data = htmlspecialchars($data); // Convertit les caractères spéciaux en entités HTML
    return $data;
}
