<!DOCTYPE html>
<?php
session_start();
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Identification</title>
    </head>
    <body>

        <form name="connection" action="Verif.php" method="post">        
            <center>
                <fieldset style="width:60%;margin-top:10%;color:teal; border: 1px solid teal;">
                    <?php
                        if (isset($_SESSION['connection'])) {
                            echo '<p style="color:red"><b>Mauvais login ou mot de passe !</b></p>';
                        }
                        else {
                            echo '<p><b>Veuillez saisir votre login et votre mot de passe</b></p>';
                        }
                    ?>
                    <legend>Connection :</legend>
                    <label for="login">Login :</label>
                    <input type="text" name="login" id="login" required /></br>
                    <label for="password">Mot de passe :</label>
                    <input type="password" name="password" id="password" required/></br>
                    <input type="submit" name="submit" value="Se connecter" />
                 </fieldset>

                 <fieldset style="width:60%;margin-top:2%;color:teal; border: 1px solid teal;"> 
                     <legend>Créer un compte</legend>
                     <a href="FormCreationCompte.php">Créer un compte ici</a>
                 </fieldset>  
            </center
        </form>

    </body>
</html>
