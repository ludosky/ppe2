<?php
try
{
    $bdd = new PDO('mysql:host=localhost;dbname=ppe2', 'root', 'sasuke93');
    $bdd->exec("SET NAMES utf8");
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}
?>
