<?php

    include("fonction.php");

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

    if(isset($_POST['log']) && isset($_POST['pass'])){
        $username = $_POST['log'];
        $password = $_POST['pass'];
        
        $req = "SELECT count(*) FROM user where 
                nom = '".$username."' and mdp = '".$password."' ";
        $RequetStatement=$BDD->query($req);
        $count=$RequetStatement->fetchColumn();

        $_SESSION['count'] = $count;
        if($count!=0){
            $req = "SELECT id FROM user where nom = '".$username."' and mdp = '".$password."' ";
            $RequetStatement=$BDD->query($req);
            while($Tab=$RequetStatement->fetch()){
                $id = $Tab[0];
            }
            $_SESSION['id'] = $id;
            $_SESSION['connect'] = true;
            include('accueil.php');
        }
        else{
            include('formulaire.php');
        }
    }else{
        include('formulaire.php');
    }

?>