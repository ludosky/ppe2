<?php
session_start();
if (!isset($_SESSION['loginAdherent']) || !isset($_SESSION['mdpAdherent']) ) {
    header ("location:index.php");
}







?>


