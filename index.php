<?php 

require("functions.php");

if(isset($_POST["ajoutUser"]))
{
		
		echo "<script>alert('L'ajout a été effectué.');</script>";
		
		$list = array (array('login' => $_POST["loginAjout"] ,'password' => $_POST["passwordAjout"]));

		$fp = fopen('user.csv', 'a+');

		foreach ($list as $fields) 
		{ 
		
			fputcsv($fp, $fields , ";");
			 
		}

		fclose($fp);
		
		
	} 


session_start();
if(isset($_SESSION["deconnexion"]))
{
	echo "<script>alert('Déconnexion réussi !');</script>";
	session_unset($_SESSION["deconnexion"]);
}


if(isset($_POST["connexion"]) )
{
		if(UserExiste($_POST["login"] , $_POST["password"]) === true)
		{
			session_start();
			$_SESSION["login"] = $_POST["login"];
			$_SESSION["password"] = $_POST["password"];
			header('Location: profil.php');
		}
		else
		{
			echo "Identifiant incorrect. Veuillez rééssayer.";
		}
	}

?>

<!doctype html>
<html lang="fr">
    
	<head>
        <meta charset="utf-8">
        <title> Le Journal du FAKE </title>
        <link rel="stylesheet" href="style2.css">
        <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
        <script src="script.js"></script>
    </head>
    
<body>
	
	<center>
	
		<header> 
			
			<h1> Le Journal du FAKE </h1>
			<hr width="15%" color="#046380" align="center">
			
		</header> 
		
	
	
	<div class="bloc"> 
	
		<div class="introduction"> 
	
			<b> Bienvenue sur le Journal du FAKE ! </b> <br><br> Vous pourrez retrouver les dernières actualités du journal juste içi. 
			<br><br> 
		
			<img src="macrondanse.gif" width ="200"> <br>
			
			<center> <em>Notre beau président </em>  <br> <br> </center>
				
				<img src="trump.gif" width ="200"> <br>
			<center> 
				
				<em> Jésus Christ </em> <br><br> 
			</center>
			
			
			Suivez nous ! <br> 
			<a href="https://youtube.com/" target="_blank" >Youtube</a>  <i class="fa fa-youtube" aria-hidden="true"></i> <br>
			<a href="https://www.facebook.com/" target="_blank" >Facebook</a> <i class="fa fa-facebook-official" aria-hidden="true"></i>  <br>
			<a href="https://twitter.com/" target="_blank" >Twitter</a>  <i class="fa fa-twitter" aria-hidden="true"></i> 
		
		</div>
	
		<div class="articleMain"> <h2> L'école IPSSI reconnu comme la meilleure école informatique privée de France </h2> 
			
			<br> 
	
			L'école IPSSI est reconnu par l'état comme la meilleure école informatique de France. Un vote a été effectuer il y a de ça quelques jours et elle est arrivée en tête avec 3 votes de plus.
		
			<br><br><br>
			
			<div class="blocImage">
			
				<div class="bloc"> 
			
					<div class="posImage">
						 <img src="photoCoursIPSSI.jpg" height="200">
						
					</div>
					
					<div class="posImage">
						 <img src="photoCoursIPSSI2.jpg" height="200"> 
						
	
					</div>
					
					<div class="posImage"> 
				

						 <img src="logoIpssi.png" height="100"> 
				
					</div>
					
				</div>
			</div>
			
			<center> 
			
				<div class="textInvisible"> <b> GOOD JOB ! </b></div>
			
			</center> 
			<br>
			<marquee direction="left"> <b> Tu a aimé cette article ? Montre le nous en nous laissant un message sur notre twitter ou notre facebook. :D </b></marquee>
				
		</div>
	
		<div class="connexion">

			<center> 
	
				 <p> <div class="connexionImage"></div> <h2> Connexion </h2> </p>
				   


				<form name="connect" method="POST">

					
					<input type="Text" name="login" placeholder="Login"> <br>
					<input type="password" name="password" placeholder="Mot de passe"> <br><br>
					<input type="submit" name="connexion" value="Connexion"> 

				</form>


				<br>
				
				<div class="inscriptionImage"></div> <h2> Inscription </h2> 
				 


				<form name="ajout" method="POST">
					
					
					<input type="Text" name="loginAjout" placeholder="Login"> <br>
					<input type="password" name="passwordAjout" placeholder="Mot de passe"> <br><br>
					<input type="submit" name="ajoutUser" value="Ajouter"> 

				</form>
	
				<br>
	
				 <div class="newsletterImage"></div> <h2> Newsletter </h2> 
				
				
				
				<input type="password" name="passwordAjout" placeholder="martin.dupont@gmail.com"> <br><br>
				<input type="submit" name="newsletter" value="S'abonner"> 
	
	
		</div>
	</div>
	
	<hr class="hr" color="#046380" align="center"> 
	<div class="BlocArticles">
		
		
				<div class="article"> <h3> Ecole ESGI - L'enseignement à la pointe de la médiocrité </h3> 
					<p> 
					Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, 
					sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, 
					utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, 
					nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino 
					</p>
					<a href="article.php"> Lire la suite --> </a>
				
				</div>
				
				<div class="article"> <h3> ETNA - Résultat du 50m nage libre </h3> 
					<p> 
					Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, 
					sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, 
					utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, 
					nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino 
					</p>
					<a href="article.php"> Lire la suite --> </a>
				
				</div>
				
				<div class="article"> <h3> Master MIAGE - La formation des "pseudo développeur" </h3> 
					<p> 
					Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, 
					sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, 
					utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, 
					nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino 
					</p>
					<a href="article.php"> Lire la suite --> </a>
				
				</div>
				
				<div class="article"> <h3> L'informatique - Aucun avenir </h3> 
					<p> 
					Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, 
					sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, 
					utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, 
					nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino 
					</p>
					<a href="article.php"> Lire la suite --> </a>
				
				</div>
				
				<div class="article"> <h3> L'informatique - Aucun avenir </h3> 
					<p> 
					Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, 
					sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, 
					utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, 
					nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino 
					</p>
					<a href="article.php"> Lire la suite --> </a>
				</div>
				
				<div class="article"> <h3> L'informatique - Aucun avenir </h3> 
					<p> 
					Etenim si attendere diligenter, existimare vere de omni hac causa volueritis, 
					sic constituetis, iudices, nec descensurum quemquam ad hanc accusationem fuisse, cui, 
					utrum vellet, liceret, nec, cum descendisset, quicquam habiturum spei fuisse, 
					nisi alicuius intolerabili libidine et nimis acerbo odio niteretur. Sed ego Atratino 
					</p>
					<a href="article.php"> Lire la suite --> </a>
				
				</div>
				<marquee direction="left"> <b> N'hésite pas à nous proposer tes propres FAKE news en nous les envoyant maintenant à l'adresse <em>  "journaldufake@gmail.com"</b> </em></marquee>
			
	</div>
	
		
</body>
		

<footer>  
	<hr width="25%" color="#046380" align="center">
	<center>
		
		<a href="www.google.com">Mentions Légales </a> <br> Site créé par LANGE Paul.
			
	</center>
		<hr width="25%" color="#046380" align="center">

</footer>


</html>




