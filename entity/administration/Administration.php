<?php
include_once '../Personne.php';

class Administration extends Personne{
    public $mdp;
    public $confmdp;

    public function set_mdp($mdp){
        $this->mdp = $mdp;
    }
    public function set_confmdp($confmdp){
        $this->confmdp = $confmdp;
    }

    function AddNewAdministration(){
        if($this->mdp === $this->confmdp){
            $conn = new Connexion();
            $connexion = $conn->getconnexion();
            
            $sql = "INSERT INTO administration(email,nom,statut,sexe,mdp) VALUES(:email, :nom, :statut, :sexe, :mdp);";
            $statement = $connexion->prepare($sql);
            $statement->bindParam(':email', $this->email);
            $statement->bindParam(':nom', $this->nom);
            $statement->bindParam(':statut', $this->statut);
            $statement->bindParam(':sexe', $this->sexe);
            $statement->bindParam(':mdp', $this->mdp);
            try{
                $statement->execute();
                header("Location:../Acceuil.php");
            }catch(PDOException $e){
                echo "Erreur: "+$e->getMessage();
            }finally{
                $connexion = null;
            }
        }
        else{
            header("Location:./PageInsertion.php?execute=errinsertion");
        }
    }
}

