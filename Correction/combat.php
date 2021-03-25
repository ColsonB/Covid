<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/css/style.css">
    <script src="main.js"></script>
    <title>Combat</title>
</head>
<body>
    
    <?php
    include "fonction.php"; 

    if($access){
        
        echo "Bienvenue".$Joueur1->getPrenom();
        echo "Tu combat avec".$Joueur1->getNomPersonnage();
        echo '<a href="index.php" >Retour menu</a>';

    }else{
        echo $errorMessage;
    }
    ?>
</body>
</html>