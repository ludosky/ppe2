<?php
include "Utilisateur.php";
$nom=$_POST['nom'];
$prenom=$_POST['prenom'];
$telephone=$_POST['telephone'];
$adresse=$_POST['adresse'];
$mail=$_POST['mail'];
$login=$_POST['NewLogin'];
$pass=$_POST['password'];
$usr= new Utilisateur($login,$pass);
$usr->CreationUtilisateur($nom,$prenom,$mail,$telephone,$adresse);
?>