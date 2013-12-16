<?php


class Modification { 
    
   
    function modifUser($user, $nom, $prenom, $email, $adresse,$telephone, $login, $password, $statue){
        include "conn_bdd.php";
        
        $requete="UPDATE adherent SET nomAdherent='$nom', prenomAdherent='$prenom', emailAdherent='$email', adresseAdherent='$adresse', telAdherent='$telephone', loginAdherent='$login', mdpAdherent='$password', admin=$statue WHERE idAdherent=$user";
        $req=$bdd->query($requete) or die(mysql_error());
        $req->fetch();        
        header('Location: EspaceMembre.php');
    }
    
    
    function modifReservation($num, $deb, $fin, $res, $nbrepers, $hebergement, $adherent, $formrestau){
        include "conn_bdd.php";
        
         
         $requete="UPDATE reservation SET dateDebutReservation='$deb', dateFinReservation='$fin', datePriseReservation='$res', NombrePersonne='$nbrepers', typeHébergement='$hebergement', idAdherent='$adherent', idFormRestau='$formrestau' WHERE numReservation=$num";
         echo $requete;
         $req=$bdd->query($requete) or die(mysql_error());
         $req->fetch();
         header('Location: EspaceMembre.php');
    }
    
    function modifEmplacement($num, $loca, $prix, $elec){
        include "conn_bdd.php";       
        
        $requete="UPDATE emplacement SET localisation='$loca', prixUnitaire=$prix, electricite=$elec WHERE numeroEmplacement=$num";
        $req=$bdd->query($requete) or die(mysql_error());
        $req->fetch();        
        header('Location: EspaceMembre.php');  
        
    }
    
    function modifChalet($num, $loca, $prix, $placeMax, $nbreLit, $nbreChambre){
        include "conn_bdd.php";       
       
        
        $requete="UPDATE chalet SET localisation='$loca', prixUnitaire=$prix, placeMax=$placeMax, nombreLit=$nbreLit, nombreChambre=$nbreChambre WHERE numeroChalet=$num";
        $req=$bdd->query($requete) or die(mysql_error());
        $req->fetch();        
        header('Location: EspaceMembre.php');            
        
    }
    
    function modifAppart($num, $loca, $prix, $placeMax, $nbreLit, $nbreChambre){
        include "conn_bdd.php";       
       
        
        $requete="UPDATE appartement SET localisation='$loca', prixUnitaire=$prix, placeMax=$placeMax, nombreLit=$nbreLit, nombreChambre=$nbreChambre WHERE numeroAppart=$num";
        $req=$bdd->query($requete) or die(mysql_error());
        $req->fetch();        
        header('Location: EspaceMembre.php');            
        
    }
}


?>


