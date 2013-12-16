<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FormGestionReservation</title>
    </head>
    <body>
         <?php
           include "conn_bdd.php";
           include "Modification.php";
           if(isset($_POST['modif']))
               {
                    $iduse=$_POST['modif'];
                    
                    if(isset($_POST['deb']))// Pour savoir si la page s'est renvoyer a elle même
                    {
                        $m= new Modification();
                        $m->modifReservation($iduse, $_POST['deb'], $_POST['fin'], $_POST['res'], $_POST['nbrepers'], $_POST['hebergement'], $_POST['adherent'], $_POST['formrestau']);
                    }
           
                    $reponse=$bdd->query("SELECT * FROM reservation WHERE numReservation=$iduse") or die(mysql_error());
                    $resultat=$reponse->fetch();
               }
        ?>
        
        <form name="connection" action="FormulaireModifReservation.php" method="post">
            
            <center><fieldset style="width:60%;margin-top:10%;color:teal; border: 1px solid teal;">
                        <legend>Modification d'une réservation</legend>
                        
         	    Début de réservation (AAAA-MM-JJ) :
		    <input type="text" name="deb" value="<?php echo $resultat[1];?>" id="deb" required /><br/>
		    Fin de réservation (AAAA-MM-JJ) :
		    <input type="text" name="fin" value="<?php echo $resultat[2];?>" id="fin" required /><br/>
		    Date de réservation effectuée (AAAA-MM-JJ) :
		    <input type="text" name="res" value="<?php echo $resultat[3];?>"  id="res" required /><br/>
		    Nombre de Personne :
		    <input type="text" name="nbrepers" value="<?php echo $resultat[4];?>"  id="nbrepers" required /><br/>
		    Type Hébergement :
		    <input type="text" name="hebergement" value="<?php echo $resultat[5];?>"  id="hebergement" required /><br/>
		    Adhérent correspondant :
		    <input type="text" name="adherent" value="<?php echo $resultat[6];?>"  id="adherent" required /><br/>
		    Formule de restauration :
		    <input type="text" name="formrestau" value="<?php echo $resultat[7];?>"  id="formrestau" required /><br/>
                    <input type="hidden" name="modif" value="<?php echo $iduse;?>" id="cache"/>
                    <p><input type="submit" value="Valider" /></p>
                    <p><a href="EspaceMembre.php">Annuler et revenir à l'espace membre</a></p>
                    </fieldset>
            </center>
        </form>

       
    </body>
</html>
