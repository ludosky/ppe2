<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GestionReservation</title>
    </head>
    <body>
        <form name="connection" action="FormulaireModifReservation.php" method="post">
            <center>
            <?php
               include "conn_bdd.php";                        
               $reponse=$bdd->query("SELECT * FROM reservation") or die(mysql_error());
               echo '<table border=1><tr><th></th><th>Numéro</th><th>Debut Réservation</th><th>Fin Réservation</th><th>Date Réservation Effectuée </th><th>Nombre de Personne</th><th>Type Hébergement</th><th>Adhérent correspondant</th><th>Formule de restauration</th></tr>';
               while ($resultat = $reponse->fetch() ) {
                   echo'<tr><td><INPUT type= "radio" name="modif" value="'.$resultat['0'].'"></td><td>'.$resultat['0'].'</td><td>'.$resultat['1'].'</td><td>'.$resultat['2'].'</td><td>'.$resultat['3'].'</td><td>'.$resultat['5'].'</td><td>'.$resultat['4'].'</td><td>'.$resultat['6'].'</td><td>'.$resultat['7'].'</td></tr>';                             
               }
               echo '</table>';
            ?>
             <input type="submit" value="Modifier" name="modifier" />
             <p><a href="EspaceMembre.php">Retour à l'espace membre</a></p>
         
            </center>
	</form>

       
    </body>
</html>
