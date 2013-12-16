<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GestionUtilisateur</title>
    </head>
    <body>
    	<form name="connection" action="FormulaireModifUtilisateur.php" method="post">
            <center>
	<?php
           include "conn_bdd.php";                        
           $reponse=$bdd->query("SELECT * FROM adherent") or die(mysql_error());
           
           echo '<table border=1><tr><th></th><th>Numéro</th><th>Nom</th><th>Prenom</th><th>Email</th><th>Adresse</th><th>Telephone</th><th>Login</th><th>Mot de passe</th><th>Statue</th></tr>';
           
           while ($resultat = $reponse->fetch() ) {
               echo'<tr><td><INPUT type= "radio" name="modif" value="'.$resultat['0'].'"></td><td>'.$resultat['0'].'</td><td>'.$resultat['1'].'</td><td>'.$resultat['2'].'</td><td>'.$resultat['3'].'</td><td>'.$resultat['5'].'</td><td>'.$resultat['4'].'</td><td>'.$resultat['6'].'</td><td>'.$resultat['7'].'</td><td>'.$resultat['8'].'</td></tr>';
           }
           echo '</table>';
        ?>
                   <input type="submit" value="Modifier" name="modifier" />
                   <p><a href="EspaceMembre.php">Retour à l'espace membre</a></p>
            </center> 
	</form>
	
       
    </body>
</html>
