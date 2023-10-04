<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Movie</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/movie.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Movies";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		
		<section>
			<!--Info générale-->
			<h2>But</h2>
			<div class="type1">
			<aside>
				<p>Explication de la page.</p>
			</aside>
				<p>
					Cet onglet regroupera les différents films que l'on peut regarder seul ou entre amis. Il sera complété au fur et à mesure. 				
				<p>
			</div>
		</section>		

		<img  class="type2" src="Images/film.png" alt="Book">

	</main>

	<footer>
			<a href="https://www.allocine.fr/" target="_blank">Allocine</a>
	</footer>
</body>
</html>