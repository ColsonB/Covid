<?

class User{

    private $_id;
    private $_nom;
    private $_prenom;
    private $_mdp;
    private $_bdd;

    public function __construct($bdd){
        $this->_bdd = $bdd;

    }

    public function setUserFromBdd($id, $nom, $prenom, $mdp){


    }

    public function ConnecteToi(){

        //affiche le formulaire 
        //on doit traiter le formulaire
        //on doit vérifier en le mdp de user
        return true;
    }

    public function DeconnecteToi(){

        return true;
    }



}

?>