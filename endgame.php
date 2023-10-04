<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Avengers: Endgame</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/movie.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Avengers: Endgame";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
			<section>
				<!--Synopsis-->
				<div class="type3">
				<h3>Synopsis</h3>	
					<aside>
						<p>Fin d'une saga et début d'une autre.</p>
					</aside>
				
				<p class="ecriture">
					Thanos ayant anéanti la moitié de l’univers, les Avengers restants resserrent les rangs dans ce vingt-deuxième film des Studios Marvel, grande conclusion d’un des chapitres de l’Univers Cinématographique Marvel. 
				</p>
				</div>				
			</section>
			<section>
				<!--Avis personnel-->
				<div class="type3">
				<h3>Avis Personnel</h3>
				<p>
					Le film mettant fin à une aventure construite sur plus de dix années avec plusieurs héros et leur histoire que l'on a appris à connaitre au fil du temps. Seul regret des scènes à rallonge pour essayer de lier les films avec un fil rouge. 
				</p>
				</div>				
			</section>

			<section>
				<!--Bande annonce-->
				<div class="type3">
				<h3>Bande Annonce</h3>
				<iframe src="https://www.youtube.com/embed/wV-Q0o2OQjQ" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
	</main>

	<footer>
			<a href="https://www.allocine.fr/film/fichefilm_gen_cfilm=232669.html" target="_blank">Allociné</a>
	</footer>
</body>
</html>