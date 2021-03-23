<?php
try{
    $BDD=new PDO('mysql:host=mysql-bcolson.alwaysdata.net; dbname=bcolson_virus; charset=utf8','bcolson_site','Colson1234*');
}catch(Exception $e){
    die('Erreur : ' . $e->getMessage());
}
?>