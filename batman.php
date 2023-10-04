<!DOCTYPE html>
<html lang="fr">
<head>
	<title>The Dark Knight, Le Chevalier Noir</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/movie.css">
</head>

<body>	
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="The Dark Knight, Le Chevalier Noir";

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
						<p>Le meilleur Batman à mon goût.</p>
					</aside>
				
				<p class="ecriture">
					Dans ce nouveau volet, Batman augmente les mises dans sa guerre contre le crime. Avec l'appui du lieutenant de police Jim Gordon et du procureur de Gotham, Harvey Dent, Batman vise à éradiquer le crime organisé qui pullule dans la ville. Leur association est très efficace mais elle sera bientôt bouleversée par le chaos déclenché par un criminel extraordinaire que les citoyens de Gotham connaissent sous le nom de Joker.
				</p>
				</div>				
			</section>
			<section>
				<!--Avis personnel-->
				<div class="type3">
				<h3>Avis Personnel</h3>
				<p>
					L'un des meilleurs films de super héros avec <mark>Christopher Nolan</mark> aux commandes et <strong>Christian Bale</strong> incarnant le rôle du superhéros. Quand <em>« The Dark Knight »</em> sort en 2008, Batman, Nolan et le public sont tous les trois arrivés à une certaine étape de leurs relations.
					À la veille de la sortie de ce film, l’homme chauve-souris n’est plus qu’un héros cinématographique laissé en lambeaux par Joel Schumacher, quant à Christopher Nolan il commence à sortir de son relatif anonymat : après l’essai virtuose que fut <em>« Memento »</em>, il a su confirmer qu’il était capable de se plier à des codes plus classiques et conventionnels avec <em>« Insomnia »</em>.  Mieux encore, en s’étant attelé à <em>« Batman Begins »</em> en 2006, l’auteur anglais a su démontrer deux ans avant la sortie de ce <em>« The Dark Knight »</em> qu’il pouvait concilier une multitude d’exigences pourtant d’apparence contradictoires : celle d’un blockbuster tout d’abord, celle d’un auteur ensuite, et surtout celle du public.
				</p>
				</div>				
			</section>

			<section>
				<!--Bande annonce-->
				<div class="type3">
				<h3>Bande Annonce</h3>
				<iframe src="https://www.youtube.com/embed/UMgb3hQCb08" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
	</main>

	<footer>
			<a href="https://www.allocine.fr/film/fichefilm_gen_cfilm=115362.html" target="_blank">Allociné</a>
	</footer>
</body>
</html>