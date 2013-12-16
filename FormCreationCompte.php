<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <form name="connection" action="CreationCompte.php" method="post">
            
          
          <center>
            <h1>Création d'un compte</h1>
            <fieldset style="width:60%;margin-top:2%;color:teal"> 
                         <legend>Formulaire de création d'un compte</legend>
                         <label for="nom">Votre nom  :</label>
                         <input type="text" name="nom" id="nom" required/></br>
                         <label for="prenom">Votre prénom :</label>
                         <input type="text" name="prenom" id="prenom" required/></br>
                         <label for="telephone">Votre numéro de téléphone :</label>
                         <input type="text" name="telephone" id="telephone" required/></br>
                         <label for="adresse">Votre adresse :</label>
                         <input type="text" name="adresse" id="adresse" required/></br>
                         <label for="mail">Votre adresse mail :</label>
                         <input type="mail" name="mail" id="mail" required/></br>
                         
                         <label for="NewLogin">Votre nom de compte (login) :</label>
                         <input type="text" name="NewLogin" id="NewLogin" required/></br>
                         <label for="password">Votre mot de passe :</label>
                         <input type="password" name="password" id="password" required/></br>
                         <p><input type="submit" name="submit" value="Créer mon compte" /></p>
                         <p><a href="index.php">Retour</a></p>
            </fieldset> 
          </center>
            
        </form>    
    </body>
</html>
