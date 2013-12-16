<?php session_start(); ?>

<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Espace Membre</title>
        <LINK rel="stylesheet" type="text/css" href="styles.css">
    </head>
    <body>
        
       <form name="connection" action="Deconnection.php">
            <center> 
                 <h1>Bienvenue dans l'espace membre, <?php echo $_SESSION['loginAdherent'];?> !</h1>
                 </br>
                 </br>
                 <p>
                 <?php 
                 require_once("calendrier.php");
                 calendrier(date("n"),date("Y"));
                 ?>
                 </p>
                 <p><font color="orange">Le jour d'aujourd'hui est en orange</font></p> 
                 <p><font color="red">Les jours déjà reservés sont en rouge</font></p>   
                 
                 <fieldset style="width:60%;margin-top:5%;color:teal; border: 1px solid teal;"> 
                      <legend>Vos options de compte</legend>
                      <p><a href="FormReservation.php">Faire une réservation</a></p>
                      <?php 
                      if ($_SESSION['admin']==1) {
                          echo '<p><a href="VisionDemandeReservation.php">Voir les demandes de réservations</a></p>';
                      }
                      ?>
                      </br>
                      <p><a href="FormModifMotdepasse.php">Modifier mon mot de passe</a></p>
                      <?php 
                      if ($_SESSION['admin']==1) {
                          echo '<p><a href="GestionUtilisateur.php">Gestion des utilisateurs</a></p>';
                          echo '<p><a href="GestionReservation.php">Gestion des réservations</a></p>';
                          echo '<p><a href="GestionLogement.php">Gestion des logements</a></p>';
                      }
                      
                      ?>
                 </fieldset>
                  <p><input type="submit" name="submit" value="Se déconnecter" /></p>

            </center>
       </form>
    </body>
</html>
