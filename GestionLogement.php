<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>GestionLogement</title>
    </head>
    <body>
    <center>
<h1>Emplacement :</h1>
        <form name="connection" action="FormulaireModifEmplacement.php" method="post">  
	<?php
           include "conn_bdd.php";                        
           $reponse=$bdd->query("SELECT * FROM emplacement") or die(mysql_error());
           echo '<table border=1><tr><th></th><th>Numéro</th><th>localisation</th><th>prixUnitaire</th><th>électricité</th>';
           while ($resultat = $reponse->fetch() ) {
               echo'<tr><td><INPUT type= "radio" name="modif" value="'.$resultat['0'].'"></td><td>'.$resultat['0'].'</td><td>'.$resultat['1'].'</td><td>'.$resultat['2'].'</td><td>'.$resultat['3'].'</td>';                             
           }
           echo '</table>';
        ?>
            <input type="submit" value="Modifier" name="modifier" />
        
		    	
	</form>
		
<h1>Chalet :</h1>
<form name="connection" action="FormulaireModifChalet.php" method="post">  
	<?php
           include "conn_bdd.php";                        
           $reponse=$bdd->query("SELECT * FROM chalet") or die(mysql_error());
           echo '<table border=1><tr><th></th><th>Numéro</th><th>localisation</th><th>prixUnitaire</th><th>Place Maximum</th><th>Nombre de lit</th><th>Nombre de Chambre</th>';
           while ($resultat = $reponse->fetch() ) {
               echo'<tr><td><INPUT type= "radio" name="modif" value="'.$resultat['0'].'"></td><td>'.$resultat['0'].'</td><td>'.$resultat['1'].'</td><td>'.$resultat['2'].'</td><td>'.$resultat['3'].'</td><td>'.$resultat['5'].'</td><td>'.$resultat['4'].'</td>';
                             
           }
           echo '</table>';
        ?>
            <input type="submit" value="Modifier" name="modifier" />
		         
	</form>
		
<h1>Appartement :</h1>
            
<form name="connection" action="FormulaireModifAppartement.php" method="post">  
    
       <?php
           include "conn_bdd.php";                        
           $reponse=$bdd->query("SELECT * FROM appartement") or die(mysql_error());
           echo '<table border=1><tr><th></th><th>Numéro</th><th>localisation</th><th>prixUnitaire</th><th>Place Maximum</th><th>Nombre de lit</th><th>Nombre de Chambre</th>';
           while ($resultat = $reponse->fetch() ) {
               echo'<tr><td><INPUT type= "radio" name="modif" value="'.$resultat['0'].'"></td><td>'.$resultat['0'].'</td><td>'.$resultat['1'].'</td><td>'.$resultat['2'].'</td><td>'.$resultat['3'].'</td><td>'.$resultat['5'].'</td><td>'.$resultat['4'].'</td>';
                             
           }
           echo '</table>';           
        ?>
           <input type="submit" value="Modifier" name="modifier" />
           <p><a href="EspaceMembre.php">Retour à l'espace membre</a></p>
    
	</form>
     </center>  
    </body>
</html>
