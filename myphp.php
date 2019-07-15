<html>
	<body>
		<a href="SauveTexte.html">Formulaire</a>
		<br><br/>
		<?php
			
			require("fonctions.php");
		
			$Resultat = Multiplication("2","3");
			echo $Resultat;
			print("<br></br>"); 
			
			//Ceci est un commentaire
			$date = date("d-m-Y");
			$heure = date("H:i");
			Print("Nous sommes le $date et il est $heure");
			
			//phpinfo();
			
			$user_name = $_POST['user_name'];
			$user_mail = $_POST['user_mail'];			
			$user_message = $_POST['user_message'];
			if(empty($user_name)) 
			{ 
				print("<center>Le '<b>nom</b>' est vide !</center>"); 
				exit(); 
			}
			elseif(empty($user_mail)) 
			{ 
				print("<center>Le '<b>e-mail</b>' est vide !</center>"); 
				exit(); 
			}
			print("<center>Bonjour $user_name $user_mail $user_message</center>");
			
			//Nombre enregistrements
			$fp = fopen("nbuser.txt","r+"); 			// 1.On ouvre le fichier en lecture/écriture
			$nbvisites = fgets($fp,11);       			// 2.On récupère le nombre dans le fichier
			$nbvisites++;                     			// 3.On incrémente le nombre de visites(+1)
			fseek($fp,0);                     			// 4.On se place en début de fichier
			fputs($fp,$nbvisites);            			// 5.On écrit dans le fichier le nouveau nb
			fclose($fp);                      			// 6.On ferme le fichier
			print("<br>$nbvisites inscrits sur le site.</br>");  // 7.On affiche le compteur à l'écran
			print("<br></br>"); 
			//Lecture fichier texte
			$fp = fopen("data.txt","r+");
			$donnees = fgets($fp,255);
			fclose($fp);
			//Affichage du résultat -----------
			echo'Le fichier contient : '.$donnees; 
			
			//Sauvegarde des données
			$fp = fopen("data.txt","a+");
			$ligne = $user_name.";".$user_mail.";".$user_message;
			print($ligne); 
			fputs($fp, $ligne);
			fputs($fp, "\n");
			fclose($fp);
			print("<br></br>"); 
			//Lecture fichier texte
			$fp = fopen("data.txt","r+");
			$donnees = fgets($fp,255);
			fclose($fp);
			//Affichage du résultat -----------
			echo'Données sauvées dans fichier data.txt'; 
		
		?>
	</body>
</html>
