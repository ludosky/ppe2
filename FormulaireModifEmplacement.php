<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FormGestionEmplacement</title>
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
                        $m->modifEmplacement($iduse, $_POST['localisation'], $_POST['prixUnitaire'], $_POST['electricite']);
                    }
        
                    $reponse=$bdd->query("SELECT * FROM  emplacement WHERE numeroEmplacement=$iduse") or die(mysql_error());
                    $resultat=$reponse->fetch();
               }
           
           ?>    		
        <form name="connection" action="FormulaireModifEmplacement.php" method="post">
                    <center><fieldset style="width:60%;margin-top:10%;color:teal; border: 1px solid teal;">
                        <legend>Modification d'un emplacement</legend>
                        
                    Localisation :
		    <input type="text" name="localisation" value="<?php echo $resultat[1];?>" id="localisation" required /><br/>
		    Prix Unitaire :
		    <input type="text" name="prixUnitaire" value="<?php echo $resultat[2]; ?>" id="prixUnitaire" required /><br/>
		    Electricité (0 pour non / 1 pour oui) :
		    <input type="text" name="electricite" value="<?php echo $resultat[3]; ?>" id="electricite" required /><br/>
		    
                    <input type="hidden" name="modif" value="<?php echo $iduse;?>" id="cache"/>
                    <input type="submit" value="Valider" />
                    <p><a href="EspaceMembre.php">Annuler et revenir à l'espace membre</a></p>
                        </fieldset>
                    </center>
	</form>
	
       
    </body>
</html>
<?php
