<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Book</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/book.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Book";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<section>
			<!--But de la page-->
			<h2>But</h2>
			<div class="type1">
					<aside>
						<p>Explication de la page.<p>
					</aside>
				<p>
					Cet onglet regroupera les différents types de livres que l'auteur a lus ou apprécie. Il sera complété au fur et à mesure. 					
				<p>
			</div>
		</section>

		<!--Images de la pages-->
		<img  class="type2" src="Images/livre.jpg" alt="Book"/>
		
	</main>

	<footer>
			<a href="https://booknode.com/" target="_blank">Booknode</a>
	</footer>
</body>
</html>