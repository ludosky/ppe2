<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FormGestionAppart</title>
    </head>
    <body>
        <?php
           include "conn_bdd.php";
           include "Modification.php";
           if(isset($_POST['modif']))
               {
                    $iduse=$_POST['modif'];
               
                    if(isset($_POST['localisation']))// Pour savoir si la page s'est renvoyer a elle même
                    {
                       
                        $m= new Modification();
                        $m->modifAppart($iduse, $_POST['localisation'], $_POST['prixUnitaire'], $_POST['placeMax'], $_POST['nombreLit'], $_POST['nombreChambre']);
                    }
        
                    $reponse=$bdd->query("SELECT * FROM  appartement WHERE numeroAppart=$iduse") or die(mysql_error());
                    $resultat=$reponse->fetch();
               }
           
           ?>    		
        <form name="connection" action="FormulaireModifAppartement.php" method="post">
                   <center><fieldset style="width:60%;margin-top:10%;color:teal; border: 1px solid teal;">
                        <legend>Modification d'un appartement</legend>
                        
                    Localisation :
		    <input type="text" name="localisation" value="<?php echo $resultat[1];?>" id="localisation" required /><br/>
		    Prix Unitaire :
		    <input type="text" name="prixUnitaire" value="<?php echo $resultat[2]; ?>" id="prixUnitaire" required /><br/>
		    Place Max:
		    <input type="text" name="placeMax" value="<?php echo $resultat[3]; ?>" id="placeMax" required /><br/>
		    Nombre de Lit :
		    <input type="text" name="nombreLit" value="<?php echo $resultat[4]; ?>" id="nombreLit" required /><br/>
		    Nombre de Chambre:
		    <input type="text" name="nombreChambre" value="<?php echo $resultat[5]; ?>" id="nombreChambre" required /><br/>
		    
                    <input type="hidden" name="modif" value="<?php echo $iduse;?>" id="cache"/>
                    <input type="submit" value="Valider" />
                    <p><a href="EspaceMembre.php">Annuler et revenir à l'espace membre</a></p>
                       </fieldset>
                   </center>
	</form>
	
       
    </body>
</html>
