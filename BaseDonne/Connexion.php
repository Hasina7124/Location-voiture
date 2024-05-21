<?php
class Connexion{
    public $connection;
    function __construct(){
        $servername ="localhost";
        $username ="root";
        $password="";
        $database="projetsempdo";

        try{
            $connection = new PDO("mysql:host=$servername; dbname=$database", $username, $password);
            $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connexion reussi";
        }catch(PDOException $e){
            echo "Echec de connexion : ". $e->getMessage();
        }
        $this->connection = $connection;
    }
    
    //Pour partager la connexion
    function getconnexion(){
        return $this->connection;
    }
}