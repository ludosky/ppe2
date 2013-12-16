<?php
session_start();
    if (!isset($_SESSION['loginAdherent']) || !isset($_SESSION['mdpAdherent']) ) {
       
        header ("location:index.php");
    }else
    {
        echo '
            <script>
                alert("Votre réservation a bien été envoyée!");
                window.location = "EspaceMembre.php";
            </script> 
        ';
    }
?>
