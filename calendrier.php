<?php
//FONCTION PRINCIPALE DU CALENDRIER
function calendrier($m_donne,$a_donne){
	include("config.php");
	
	// On r�cup�re le mois et l'ann�e dans la barre de navigation
        if (isset($_GET['m']) || isset($_GET['a'])) {
            $m = $_GET['m'];
	    $a = $_GET['a']; 
        }
        else {
            // Si rien n'est sp�cifi�, cela veut dire qu'il faut afficher le mois et l'ann�e donn�s par la fonction
           // if ($m == "") { $m = $m_donne; }
            //if ($a == "") { $a = $a_donne; }
             $m = $m_donne; 
            $a = $a_donne; 
        }


	


	// Calcul du nombre de jours dans chaque mois en prenant compte des ann�es bisextiles. les tableaux PHP commen�ant � 0 et non � 1, le premier mois est un mois "factice"
	if (($a % 4) == 0){
		$nbrjour = array(0, 31, 29, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	}else{
		$nbrjour = array(0, 31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
	}

	// On cherche gr�ce � cette fonction � quel jour de la semaine correspond le 1er du mois 
        $CAL_FRENCH = 0;
	$premierdumois = jddayofweek(cal_to_jd($CAL_FRENCH, $m, 1, $a), 0);
	if($premierdumois == 0){
		$premierdumois = 7;
	}

	//Pr�paration du tableau avec le nom du mois et la liste des jours de la semaine
	echo "<table border=1 bordercolor=\"#FFFFFF\"><tr><td class=\"fleches\">"
		.mois_precedent($m,$mois[$m],$a)
		."</td><td class=\"nom_mois\" colspan=\"5\">$mois[$m] $a</td><td class=\"fleches\">"
		.mois_suivant($m,$a)
		."</td></tr><tr class=\"noms_jours\">"
		."<td>$jours[1]</td><td>$jours[2]</td><td>$jours[3]</td><td>$jours[4]</td><td>$jours[5]</td><td>$jours[6]</td><td>$jours[7]</td></tr><tr>";

	$jour=1;	//Cette variable est celle qui va afficher les jours de la semaine
	$joursmoisavant = $nbrjour[$m-1] - $premierdumois+2;		//Celle-ci sert � afficher les jours du mois pr�c�dent qui apparaissent
	$jourmoissuivant = 1; //Et celle-ci les jours du mois suivant
	if($m == 1){
		$joursmoisavant = $nbrjour[$m+11] - $premierdumois+2; //Si c'est janvier, le mois d'avant n'est pas � 0 mais 31 jours!
	}

	//Et c'est parti pour la boucle for qui va cr�er l'affichage de notre calendrier !
	for($i=1;$i<40;$i++){		
		if($i < $premierdumois){	// Tant que la variable i ne correspond pas au premier jour du mois, on fait des cellules de tableau avec les derniers jours du mois pr�c�dent
		echo "<td class=\"cases_vides\">$joursmoisavant</td>";
		$joursmoisavant++;
		}else{
			if($jour == date("d") && $m == date("n")){ 	//Si la variable $jour correspond � la date d'aujourd'hui, la case est d'une couleur diff�rente
				echo "<td class=\"aujourdhui\">$jour</td>";
			}else{ 
                            
                            
                            
                            
                            
                            
                               if ($jour==2) {
                                   echo "<td class=\"joursReserve\">$jour</td>";
                                   
                               }
                               else {
                                   echo "<td class=\"jours\">$jour</td>";
                               }
                            
                            
                            
                            
                                
				
                                
                                
                                
                                
			}
			$jour++;	//On passe au lendemain ^^
		
			/*Si la variable $jour est plus �lev�e que le nombre de jours du mois,  c'est que c'est la fin du mois! 
			    On remplit les cases vides avec les premiers jours des mois suivants
			    Hop on ferme le tableau, 
			    et on met la variable $i � 41 pour sortir de la boucle */
			if($jour > ($nbrjour[$m])){
				while($i % 7 != 0){
					echo "<td class=\"cases_vides\">$jourmoissuivant</td>";
					$i++;
					$jourmoissuivant++;
				}
			echo "</tr></table>";
			$i=41;
			}
		}
	
		// Si la variable i correspond � un dimanche (multiple de 7), on passe � la ligne suivante dans le tableau
		if($i % 7 == 0){
			echo "</tr><tr>";
		}

	}

}

//FONCTION POUR AFFICHER LE MOINS SUIVANT
function mois_suivant($m,$a){
	$m++;	//mois suivant, donc on incr�mente de 1
	if($m==13){	//si le mois et 13 �a joue pas! cela veut dire qu'il faut augmenter l'ann�e de 1 et repasser le mois � 1
		$a++;
		$m=1;
	}
	return '<a href="'.$_SERVER['PHP_SELF']."?m=$m&a=$a\"> &raquo; </a>";
}

//FONCTION POUR AFFICHER LE MOINS PRECEDENT
function mois_precedent($m,$mois,$a){
	$m--;
	if($m==0){
		$a--;
		$m=12;
	}
	return '<a href="'.$_SERVER['PHP_SELF']."?m=$m&a=$a\"> &laquo; </a>";
}
?>