<?php

    include("BDD.php");

    if(!empty($_POST)){
        extract($_POST);
        $valid = true;
        
        if(isset($_POST['inscription'])){
            if($mdp == $confmdp){
                $nom = $_POST['nom'];
                $prenom = $_POST['prenom'];
                $mdp = $_POST['mdp'];
                $confmdp = $_POST['confmdp'];

                $req = "INSERT INTO `user`(`id`, `nom`, `prenom`, `mdp`) VALUES ('$nom', '$prenom','$mdp')";
                $requetStatement=$BDD->query($req);
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Inscription</title>
        <link rel="icon" type="image/png" href="src/img/icone.png">
        <link rel='stylesheet' type='text/css' href='src/css/page.css'>
        <link rel='stylesheet' type='text/css' href='src/css/inscription.css'>
    </head>

    <body>
        <h1>Inscription</h1>
        <div class="form">
            <form method="post">
                <div class="user">
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" required>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prenom" required>
                </div>
                <?php
                    if(isset($_POST['inscription'])){
                        //Si le mot de passe est incorrect on envoie un message
                        if($mdp != $confmdp){
                            ?>
                                <div class="erreur_mdp">
                                    <p>Veuillez saisir le même mot de passe</p>
                                </div>
                            <?php
                        }
                    }
                ?>
                <div class="mdp">
                    <input type="password" id="mdp" name="mdp" placeholder="Mot de passe" required>
                </div>
                <div class="confmdp">
                    <input type="password" id="confmdp" name="confmdp" placeholder="Confirmer le mot de passe" required>
                </div>
                <div class="submit">
                    <input type="submit" id="inscription" name="inscription" value="Creer le personnage">
                </div>
            </form>
        </div>
        <div class="connexion">
            <a href="index.php">
                <button id="connexion">Connecte-toi</button>
            </a>
        </div>
    </body>
</html>