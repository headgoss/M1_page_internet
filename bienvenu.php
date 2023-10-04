<!DOCTYPE html>
<html>
<head>
	<title>Target PHP</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/page_connexion.css">
</head>
<body>
	<?php
	$prenom=$nom=$passe=$mail="";//initialisation des variables
	function secur($donnees){//création de fonctions
		$donnees = strip_tags($donnees);//met la sécurité sur les balise html
		$donnees = stripslashes($donnees);//met la sécurité sur les anti-slash
		$donnees = trim($donnees);//met la sécurité sur les doubles espaces,retour à la ligne...
		return $donnees;
	}
		//sécurise toutes les données
		$prenom= secur ($_POST['prenom']);
		$nom= secur ($_POST['Nom']);
		$passe= secur ($_POST['passe']);
		$mail= secur ($_POST['mail']);

		echo 'Bonjour '.$prenom.' '.$nom.' vous avez réussi à vous connecter.'
	?>
	<br><br><br>
	<p>Pour continuer sur le site <a href="accueil.php"><img src="Images/accueil.jpg"></a></p>
	<br><br><br>
	<p>Clique <a href="connexion.php">ici</a> pour modifier tes informations.</p><!--permet de revenir à la page formulaire-->
</body>
</html>