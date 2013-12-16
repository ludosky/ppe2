<?php
include "Utilisateur.php";

$login=$_SESSION['login'];
$pass=$_SESSION['motdepasse'];
$AncienMotdepasse=$_POST['password'];
$NouveauMotdepasse=$_POST['password2'];
$VerifNouveauMotdepasse=$_POST['password3'];
$usr= new Utilisateur($login,$pass);
$usr->ChangerMotdepasse($AncienMotdepasse,$NouveauMotdepasse,$VerifNouveauMotdepasse);
?>
