<?php
include_once '../Personne.php';
class Administration_ extends Personne{
    public $mdp;
    public $confmdp;
    function __construct($email,$nom,$statut,$sexe,$mdp,$confmdp){
        $this->email = $email;
        $this->nom = $nom;
        $this->sexe = $sexe;
        $this->statut = $statut;
        $this->mdp = $mdp;
        $this->confmdp = $confmdp;
    }

    function AddNewAdministration($connexion){
        if($this->mdp = $this->confmdp){
            $sql = "INSERT INTO administration(email,nom,statut,sexe,mdp) VALUES(:email, :nom, :statut, :sexe, :mdp);";
            $statement = $connexion->prepare($sql);
            $statement->bindParam(':email', $this->email);
            $statement->bindParam(':nom', $this->nom);
            $statement->bindParam(':statut', $this->statut);
            $statement->bindParam(':sexe', $this->sexe);
            $statement->bindParam(':mdp', $this->mdp);
            if($statement->execute()){
                header("Location:./PageInsertion.php?execute=ok");
            }
            else{
                header("Location:./PageInsertion.php?execute=error");
            }
        }
        else{

        }
    }
}