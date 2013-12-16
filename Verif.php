<?php

include "conn_bdd.php";
include "Utilisateur.php"; 



if (!isset($_POST['login']) || !isset($_POST['password']) ) {
    header ("location:index.php");
}

else {
    $login=$_POST['login'];
    $pass=$_POST['password'];
    $usr= new Utilisateur($login,$pass);
    $usr->Connecter();
    
}

?>
