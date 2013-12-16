<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>FormGestionUtilisateur</title>
    </head>
    <body>
        <?php
           include "conn_bdd.php";
           include "Modification.php";
           if(isset($_POST['modif']))
               {
                    $iduse=$_POST['modif'];
               
                    if(isset($_POST['nom']))// Pour savoir si la page s'est renvoyer a elle même
                    {
                        $m= new Modification();
                        $m->modifUser($iduse, $_POST['nom'], $_POST['prenom'], $_POST['mail'], $_POST['adresse'], $_POST['tel'], $_POST['login'], $_POST['mdp'], $_POST['statue']);
                    }
        
                    $reponse=$bdd->query("SELECT * FROM adherent WHERE idAdherent=$iduse") or die(mysql_error());
                    $resultat=$reponse->fetch();
               }
           
           ?>
    		
        <form name="connection" action="FormulaireModifUtilisateur.php" method="post">
            
            <center><fieldset style="width:60%;margin-top:10%;color:teal; border: 1px solid teal;">
                        <legend>Modification de l'utilisateur</legend>
		    Nom :
		    <input type="text" name="nom" value="<?php echo $resultat[1];?>" id="nom" required /><br/>
		    Prenom :
		    <input type="text" name="prenom" value="<?php echo $resultat[2]; ?>" id="prenom" required /><br/>
		    Email :
		    <input type="text" name="mail" value="<?php echo $resultat[3]; ?>" id="mail" required /><br/>
		    Adresse :
		    <input type="text" name="adresse" value="<?php echo $resultat[4]; ?>" id="adresse" required /><br/>
		    Telephone :
		    <input type="text" name="tel" value="<?php echo $resultat[5]; ?>" id="tel" required /><br/>
		    Login :
		    <input type="text" name="login" value="<?php echo $resultat[6]; ?>" id="login" required /><br/>
		    Mot de passe :
		    <input type="text" name="mdp" value="<?php echo $resultat[7]; ?>" id="mdp" required /><br/>
		    Statue :
                    <input type="text" name="statue" value="<?php echo $resultat[8]; ?>" id="statue" required /><br/>
                    <input type="hidden" name="modif" value="<?php echo $iduse;?>" id="cache"/>
                    <input type="submit" value="Valider" />
                    <p><a href="EspaceMembre.php">Annuler et revenir à l'espace membre</a></p>
                    
                    </fieldset>
            </center>
	</form>
	
       
    </body>
</html>
