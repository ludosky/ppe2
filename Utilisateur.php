<?php
 session_start();
    
 class  Utilisateur {
     
    private $id;
    private $nom;
    private $prenom;
    private $telephone;
    private $adresse;
    private $mail;
    private $login;
    private $pass;
    
    function __construct($login,$pass) {
        $this->login=$login;
        $this->pass=$pass;
    }
    
    function Connecter() {
        include "conn_bdd.php"; 
        $req=$bdd->query("SELECT loginAdherent,mdpAdherent,idAdherent,admin FROM adherent WHERE loginAdherent='$this->login' AND mdpAdherent='$this->pass'");
        $resultat=$req->fetch();
        
        if ($resultat['loginAdherent']!=$this->login || $resultat['mdpAdherent']!=$this->pass ) {
            $_SESSION['connection']=false;
            header( 'Location: index.php');           
        }
        else {
            
            $_SESSION['loginAdherent']=$this->login;
            $_SESSION['mdpAdherent']=$this->pass;
            $_SESSION['idAdherent']=$resultat['idAdherent'];
            $_SESSION['admin']=$resultat['admin'];
            header( 'Location: EspaceMembre.php'); 
        }
    }
    
    function Deconnecter() {
        session_destroy();
        header( 'Location: index.php'); 
    }
    
    function ChangerMotdepasse($AncienMotdepasse,$NouveauMotdepasse,$VerifNouveauMotdepasse) {
        include "conn_bdd.php";
        $login=$_SESSION['loginAdherent'];
        $pass=$_SESSION['mdpAdherent'];
        if ($AncienMotdepasse==$_SESSION['mdpAdherent']) {
            if ($NouveauMotdepasse==$VerifNouveauMotdepasse) {
                $req=$bdd->query("UPDATE adherent SET mdpAdherent='$NouveauMotdepasse' WHERE loginAdherent='$login' AND mdpAdherent='$pass'")or die(print_r($bdd->errorInfo()));
                unset($_SESSION['infoMDP']);
                header( 'Location: EspaceMembre.php'); 
            }
            else {
                $_SESSION['infoMDP']='<p style="color:red"><b>Le nouveau mot de passe et la resaisi de celui-ci est différent !</b></p>';
                header( 'Location: FormModifMotdepasse.php'); 
                
            }
        }
        else {
            $_SESSION['infoMDP']="<p style='color:red'><b>L'ancien mot de passe saisi est mauvais !</b></p>";
            header( 'Location: FormModifMotdepasse.php'); 
        }
    }
    
    function CreationUtilisateur($nom,$prenom,$mail,$telephone,$adresse) {
        include "conn_bdd.php";
        $req=$bdd->query("INSERT INTO adherent (nomAdherent,prenomAdherent,emailAdherent,telAdherent,adresseAdherent,mdpAdherent,loginAdherent) VALUES ('$nom','$prenom','$mail','$telephone','$adresse','$this->pass','$this->login')")or die(print_r($bdd->errorInfo()));
        echo '
            <script>
                alert("Le compte a ete cree");
                window.location = "index.php";
            </script> 
        ';    
    }
    function Reserver() {
        
    }
 }

?>

