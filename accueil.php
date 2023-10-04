<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Accueil</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/accueil.css">
</head>

<body>	
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Accueil";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<section>
			<!--Section de but de la page-->
			<h3>But</h3>
			<div class="type1">
					<aside>
						<p>Les informations et goût du site sont les avis <strong><em>personnels</em></strong> de l'auteur.</p>
					</aside>
				<p>
					Nous allons à travers ce site partager quelque lecture possible qui peut intéresser.<br>
					Ainsi que des film et série intéressante à regarder.<br>
					Ce site sera ainsi décomposé en plusieurs parties.<br>
					Nous aurons une partie lecture.<br>
					Une partie cinématographique pour les films et de même pour les séries.
					
				<p>
			</div>
		</section>

		<!--Les images à insérer-->
		<img  class="type2" src="Images/livre.jpg" alt="Book">
		<img  class="type2" id="type2" src="Images/film.png"  alt="Film">
		
	</main>

	<footer>
		<!--Liste de définition-->
			<dl>
				<dt><span><a href="https://www.linternaute.fr/dictionnaire/fr/definition/livre/" target="_blank">Livre</a></span></dt>
				<dd> Objet constitué de l'assemblage d'un grand nombre de feuilles.</dd>
				<dt><span><a href="https://www.linternaute.fr/dictionnaire/fr/definition/film/" target="_blank">Film</a></span></dt>
				<dd>Oeuvre cinématographique.</dd>
				<dt><span><a href="https://www.linternaute.fr/dictionnaire/fr/definition/serie-1/" target="_blank">Serie</a></span></dt>
				<dd> Suite de choses constituant un ensemble. </dd>
				<dt><span><a href="https://www.linternaute.fr/dictionnaire/fr/definition/personnel/" target="_blank">Personnel</a></span></dt>
				<dd> Propre à une personne, qui lui appartient, qui la caractérise. </dd>
			</dl>
			<br>
			<a href="https://fr.wikipedia.org/wiki/Page_d%27accueil" target="_blank">Page d'accueil selon Wikipedia</a>
	</footer>
</body>
</html>