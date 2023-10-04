<!DOCTYPE html>
<html lang="fr">
<head>
	<title>John Wick</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/movie.css">
</head>

<body>	
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="John Wick";

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
						<p>Une histoire folle et pleine d'action.</p>
					</aside>
				
				<p class="ecriture">
					Depuis la mort de sa femme bien-aimée, John Wick passe ses journées à retaper sa Ford Mustang de 1969, avec pour seule compagnie sa chienne Daisy. Il mène une vie sans histoire, jusqu’à ce qu’un malfrat sadique nommé Iosef Tarasof remarque sa voiture. John refuse de la lui vendre. Iosef n’acceptant pas qu’on lui résiste, s’introduit chez John avec deux complices pour voler la Mustang, et tuer sauvagement Daisy…
					John remonte la piste de Iosef jusqu’à New York. Un ancien contact, Aurelio, lui apprend que le malfrat est le fils unique d’un grand patron de la pègre, Viggo Tarasof. La rumeur se répand rapidement dans le milieu : le légendaire tueur cherche Iosef. Viggo met à prix la tête de John : quiconque l’abattra touchera une énorme récompense. John a désormais tous les assassins de New York aux trousses.
				</p>
				</div>				
			</section>
			<section>
				<!--Avis personnel-->
				<div class="type3">
				<h3>Avis Personnel</h3>
				<p>
					De l'action, du divertissement, un <mark>Keanu Reeves</mark> impeccable, que demander de plus ? Ok c'est le schéma classique mes mafieux russes contre le gentil américain, mais il ne faut pas non plus chercher de message politique ou même profond dans ce genre de film, faut juste se laisser aller et passer un bon moment. Seul concept un peu original et très sympa : l'hôtel Continental avec son propre règlement et ses clients "particuliers". En tout cas chapeau bas au chorégraphe car les scènes d'action - et elles sont nombreuses - sont très soignées. 
				</p>
				</div>				
			</section>

			<section>
				<!--Bande annonce-->
				<div class="type3">
				<h3>Bande Annonce</h3>
				<iframe src="https://www.youtube.com/embed/pWK5crMuhHY" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
	</main>

	<footer>
			<a href="https://www.allocine.fr/film/fichefilm_gen_cfilm=221387.html" target="_blank">Allociné</a>
	</footer>
</body>
</html>