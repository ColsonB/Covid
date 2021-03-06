<?php

class Personnage{
    
    private $_id;
    private $_nom;
    private $_vie;
    private $_attaque;

    private $_bdd;

    public function __construct($bdd){
        $this->_bdd = $bdd;
    }

    public function setPersonnage($id,$nom,$vie,$attaque){
        $this->_id = $id;
        $this->_nom = $nom;
        $this->_vie = $vie;
        $this->_attaque = $attaque;
    }

    public function getNom(){
        return $this->_nom;
    }
    public function getId(){
        return $this->_id;
    }

    public function setPersonnageById($id){
        $Result = $this->_bdd->query("SELECT * FROM `personnage` WHERE `id`='".$id."' ");
        if($tab = $Result->fetch()){ 

            $this->setPersonnage($tab["id"],$tab["nom"],$tab["vie"],$tab["attaque"]);
        }
    }

    //Retourne une liste HTML de tous les personnages
    //et permet d'attribuer un perso à un user
    // retour un objet personnage
    public function getChoixPersonnage(){
        $Result = $this->_bdd->query("SELECT * FROM `personnage` ");
        ?>
        <form action="" method="post" onchange="this.submit()">
            <select name="idPersonnage" id="idPersonnage">
            <option value=""> Choisi un perso</option>;
                <?php while($tab=$Result->fetch()){
                    echo '<option value="'.$tab["id"].'"> '.$tab["nom"].'</option>';

                }
                ?>
            </select>
        </form>
        <?php
        if (isset($_POST["idPersonnage"])){
            $this->setPersonnageById($_POST["idPersonnage"]);
        }

        return $this;
    }

}

?>