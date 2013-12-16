<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Les demandes de réservations</title>
    </head>
    <body>
        <h1>Vision des demandes de réservations</h1>
        
        <form>
            
            
          <?php
               include "conn_bdd.php";                        
               $reponse=$bdd->query("SELECT * FROM DemandeReservation") or die(mysql_error());
               echo '<table border=1><tr><th>Valider</th><th>Refuser</th><th>Debut Réservation</th><th>Fin Réservation</th><th>Date Réservation Effectuée </th><th>Nombre de Personne</th><th>Type Hébergement</th><th>Adhérent correspondant</th><th>Formule de restauration</th></tr>';
               while ($resultat = $reponse->fetch() ) {
                   echo'<tr><td><INPUT type= "radio" name="modif" value="1'.$resultat['0'].'"><td><INPUT type= "radio" name="modif" value="0'.$resultat['0'].'"></td><td>'.$resultat['0'].'</td><td>'.$resultat['1'].'</td><td>'.$resultat['2'].'</td><td>'.$resultat['3'].'</td><td>'.$resultat['5'].'</td><td>'.$resultat['4'].'</td><td>'.$resultat['6'].'</td><td>'.$resultat['7'].'</td></tr>';                             
               }
                              echo '</table>';
         ?>  
            
            
            
            
        </form>

    </body>
</html>
