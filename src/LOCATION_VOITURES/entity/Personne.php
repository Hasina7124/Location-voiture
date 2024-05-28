<?php
class Personne{
    public $email;
    public $nom;
    public $sexe;
    public $statut;

    public function set_email($email){
        $this->email = $email;
    }
    public function set_nom($nom){
        $this->nom = $nom;
    }
    public function set_sexe($sexe){
        $this->sexe = $sexe;
    }
    public function set_statut($statut){
        $this->statut = $statut;
    }
}