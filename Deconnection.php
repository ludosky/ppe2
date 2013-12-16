<?php

session_start();
include "Utilisateur.php";

$login=$_SESSION['login'];
$pass=$_SESSION['motdepasse'];
$usr= new Utilisateur($login,$pass);
$usr->Deconnecter();

?>
