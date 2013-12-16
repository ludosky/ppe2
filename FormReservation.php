<!DOCTYPE html>
<?php
include "conn_bdd.php";
include "Utilisateur.php";
if (!isset($_SESSION['loginAdherent']) || !isset($_SESSION['mdpAdherent']) ) {
    header ("location:index.php");
}
 
?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Demande de réservation</title>
    </head>
    <body>
        
        <form name="connection" action="Reservation.php" method="post">
            <center>
                <h1>Demande de réservation</h1>     
                <fieldset style="width:60%;margin-top:2%;color:teal"> 
                     <legend>Formulaire de réservation</legend>
                         <p><label for="typeHebergement">Veuillez choisir un type d'hebergement  :</label>
                         <select name='typeHebergement' id='typeHebergement'>
                             <option value="Appartement">Appartement</option>
                             <option value="Chalet">Chalet</option>
                             <option value="Emplacement">Emplacement</option>
                             </select></p>
                         <p><label for="nombrePersonne">Nombre de personne :</label>
                         <input type="text" name="nombrePersonne" id="nombrePersonne" required/></p>
                         <p><label for="formRestau">Voulez vous la formule restauration ?</label><br>
                         <input type="radio" name="formRestau" id='formRestau1' value="1"><label for="formRestau1">Oui</label>&nbsp
                         <input type="radio" name="formRestau" id='formRestau2'  value="2"><label for="formRestau2">Non</label>
                         
                         <p>Quel est l'année de votre reservation ?</br>
                         <input type="radio" name="choixAnnee" id='choixAnnee1' value="1" onClick="afficher2013();"/><label for="choixAnnee1">2013</label>&nbsp
                         <input type="radio" name="choixAnnee" id='choixAnnee2'  value="2" onClick="afficher2014();"/><label for="choixAnnee2">2014</label>
                         <input type="radio" name="choixAnnee" id='choixAnnee3'  value="2" onClick="afficher2015();"/><label for="choixAnnee3">2015</label>
                         </p>
                         
                         

                     
                         
                         
                         
                         <div id='2013' style="display: none">
                                     <p>Combien de semaine voulez vous reserver ?</label<br>
                               <input type="radio" name="choixNbSemaine" id='choixNbSemaine1' value="1" onClick="afficher2013_1();"/><label for="choixNbSemaine1">1 semaine</label>&nbsp
                               <input type="radio" name="choixNbSemaine" id='choixNbSemaine2'  value="2" onClick="afficher2013_2();"/><label for="choixNbSemaine2">2 semaine</label></p>
        
                               <p id="2013_1" style="display: none">Choisissez une semaine parmis celles disponibles</br></br>
                               <select>
                                   <?php
                                   
                                   $reponse=$bdd->query("SELECT * FROM semainereservation WHERE nbSemaine=1 AND annee=2013 AND disponibilite=1") or die(mysql_error());
                                   while ($resultat = $reponse->fetch() ) {
                                       echo $resultat['1'];
                                       echo '<option value="'.$resultat['1'].'">'.$resultat['1'].'</option> ';
                                        
                                   }
                                   ?>
                                </select>   
                               
                               </p>
                               <p id="2013_2" style="display: none">
                               Choisissez deux semaines parmis celles disponibles</br></br>
                               
                              <select>
                                   <?php
                                   
                                   $reponse=$bdd->query("SELECT * FROM semainereservation WHERE nbSemaine=2 AND annee=2013 AND disponibilite=1") or die(mysql_error());
                                   while ($resultat = $reponse->fetch() ) {
                                       echo $resultat['1'];
                                       echo '<option value="'.$resultat['1'].'">'.$resultat['1'].'</option> ';
                                        
                                   }
                                   ?>
                              </select>  
                               
                             </p>
                        </div>
                         
                       
                               
                               
                         <div id="2014" style="display: none">
                                     <p>Combien de semaine voulez vous reserver ?</label<br>
                               <input type="radio" name="choixNbSemaine" id='choixNbSemaine1-2' value="1" onClick="afficher2014_1();"/><label for="choixNbSemaine1-2">1 semaine</label>&nbsp
                               <input type="radio" name="choixNbSemaine" id='choixNbSemaine2-2'  value="2" onClick="afficher2014_2();"/><label for="choixNbSemaine2-2">2 semaine</label></p>
        
                               <p id="2014_1" style="display: none">Choisissez une semaine parmis celles disponibles</br></br>
                               <select>
                                   <?php
                                   
                                   $reponse=$bdd->query("SELECT * FROM semainereservation WHERE nbSemaine=1 AND annee=2014 AND disponibilite=1") or die(mysql_error());
                                   while ($resultat = $reponse->fetch() ) {
                                       echo $resultat['1'];
                                       echo '<option value="'.$resultat['1'].'">'.$resultat['1'].'</option> ';
                                        
                                   }
                                   ?>
                                </select>   
                               
                               </p>
                               <p id="2014_2" style="display: none">
                               Choisissez deux semaines parmis celles disponibles</br></br>
                               
                              <select>
                                   <?php
                                   
                                   $reponse=$bdd->query("SELECT * FROM semainereservation WHERE nbSemaine=2 AND annee=2014 AND disponibilite=1") or die(mysql_error());
                                   while ($resultat = $reponse->fetch() ) {
                                       echo $resultat['1'];
                                       echo '<option value="'.$resultat['1'].'">'.$resultat['1'].'</option> ';
                                        
                                   }
                                   ?>
                              </select>  
                               
                             </p>
                         </div>
                         
                          <div id="2015" style="display: none">
                                     <p>Combien de semaine voulez vous reserver ?</label<br>
                               <input type="radio" name="choixNbSemaine" id='choixNbSemaine1-3' value="1" onClick="afficher2015_1();"/><label for="choixNbSemaine1-3">1 semaine</label>&nbsp
                               <input type="radio" name="choixNbSemaine" id='choixNbSemaine2-3'  value="2" onClick="afficher2015_2();"/><label for="choixNbSemaine2-3">2 semaine</label></p>
        
                               <p id="2015_1" style="display: none">Choisissez une semaine parmis celles disponibles</br></br>
                               <select>
                                   <?php
                                   
                                   $reponse=$bdd->query("SELECT * FROM semainereservation WHERE nbSemaine=1 AND annee=2015 AND disponibilite=1") or die(mysql_error());
                                   while ($resultat = $reponse->fetch() ) {
                                       echo $resultat['1'];
                                       echo '<option value="'.$resultat['1'].'">'.$resultat['1'].'</option> ';
                                        
                                   }
                                   ?>
                                </select>   
                               
                               </p>
                               <p id="2015_2" style="display: none">
                               Choisissez deux semaines parmis celles disponibles</br></br>
                               
                              <select>
                                   <?php
                                   
                                   $reponse=$bdd->query("SELECT * FROM semainereservation WHERE nbSemaine=2 AND annee=2015 AND disponibilite=1") or die(mysql_error());
                                   while ($resultat = $reponse->fetch() ) {
                                       echo $resultat['1'];
                                       echo '<option value="'.$resultat['1'].'">'.$resultat['1'].'</option> ';
                                        
                                   }
                                   ?>
                              </select>  
                               
                             </p>
                         </div>
                         
              
                         
                         
                         
                         
                  
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         
                         <p><input type="submit" name="submit" value="Réserver" /></p>
                         <p><a href="EspaceMembre.php">Retour</a></p>
                 </fieldset>
 

 
 
<script type="text/javascript">
    
document.getElementById("champ_cache1").style.display = "none";

function afficher2013()
{
    document.getElementById("2013").style.display = "block";
    document.getElementById("2014").style.display = "none";
    document.getElementById("2015").style.display = "none";
}
 
function afficher2014()
{
    document.getElementById("2013").style.display = "none";
    document.getElementById("2014").style.display = "block";
    document.getElementById("2015").style.display = "none";
}

function afficher2015()
{
    document.getElementById("2013").style.display = "none";
    document.getElementById("2014").style.display = "none";
    document.getElementById("2015").style.display = "block";
}

function afficher2013_1() {
    document.getElementById("2013_1").style.display = "block";
    document.getElementById("2013_2").style.display = "none";
}

function afficher2013_2() {
    document.getElementById("2013_1").style.display = "none";
    document.getElementById("2013_2").style.display = "block";
}

function afficher2014_1() {
    document.getElementById("2014_1").style.display = "block";
    document.getElementById("2014_2").style.display = "none";
}

function afficher2014_2() {
    document.getElementById("2014_1").style.display = "none";
    document.getElementById("2014_2").style.display = "block";
}

function afficher2015_1() {
    document.getElementById("2015_1").style.display = "block";
    document.getElementById("2015_2").style.display = "none";
}

function afficher2015_2() {
    document.getElementById("2015_1").style.display = "none";
    document.getElementById("2015_2").style.display = "block";
}





</script>
            
  
            
            
            </center>  
        </form>
    </body>
</html>
