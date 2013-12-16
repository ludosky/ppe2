 <?php
 session_start();
 ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Modification du mot de passe</title>
    </head>
    <body>


        <form name="connection" action="ModifMotdepasse.php" method="post">        
            <center>
                <fieldset style="width:60%;margin-top:10%;color:teal">         
                    <?php
                        if (isset($_SESSION['infoMDP'])) {
                            echo $_SESSION['infoMDP'];
                        }
                    ?>
                    <legend>Changer votre mot de passe :</legend>
                    <label for="password">Votre ancien mot de passe :</label>
                    <input type="password" name="password" id="password" required/></br>
                    <label for="password2">Votre nouveau mot de passe :</label>
                    <input type="password" name="password2" id="password2" required/></br>
                    <label for="password3">Resaisissez votre nouveau mot de passe :</label>
                    <input type="password" name="password3" id="password3" required/></br>
                    <p><input type="submit" name="submit" value="Changer" /></p>
                    <p><a href="EspaceMembre.php">Retour à l'espace membre</a></p>
                 </fieldset>


            </center
        </form>

    </body>
</html>