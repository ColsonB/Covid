<?php

class Personnage{
    
    private $_id;
    private $_nom;
    private $_vie;
    private $_attaque;

    private $_bdd;

    public function __construct(){
        $this->_bdd = $bdd;
    }

    public function setPerso($id,$nom,$vie,$attaque){
        $this->_id = $id;
        $this->_nom = $nom;
        $this->_vie = $vie;
        $this->_attaque = $attaque;    
    }

    public function setPersonnageById($id){
        $Result = $this->_bdd->query("SELECT * FROM 'personnage' WHERE 'id' = '".$id."'");
        if($tab = $Result->fetch()){
            $this->setUser($tab["id"], $tab["nom"], $tab["vie"], $tab["attaque"]);
        }


    }




}