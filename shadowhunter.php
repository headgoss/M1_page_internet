<!DOCTYPE html>
<html lang="fr">
<head>
	<title>ShadowHunter</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/serie.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="ShadowHunter";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<div class="type3">	
			<section>
				<!--Synopsis-->
				<h3>Synopsis</h3>				
					<aside>
						<p>Dépends des goûts des personnes</p>
					</aside>				
				<p class="ecriture">
					Dans le New York contemporain, les humains ne se doutent pas des forces démoniaques qui s'affrontent sous leurs yeux. Parmi eux, Clary Fray découvre le jour de ses 18 ans qu'elle n'est pas une adolescente comme les autres. Dotée de certains pouvoirs qu'elle ne maîtrise pas encore, la jeune femme est brutalement propulsée vers le côté obscur de notre monde, dans lequel des Chasseurs d'Ombres combattent des créatures maléfiques. En s'alliant aux autres Chasseurs, Clary accomplit sa destinée, tout en allant de révélation en révélation.

					Adaptation en série des romans "The Mortal Instruments" ("La Cité des ténèbres") de Cassandra Clare, initiée en 2007. 
				</p>
								
			</section>
		</div>
			<section>
				<!--Avis Personnel-->
				<div class="type3">
				<h3>Avis Personnel</h3>
				<p>
					ShadowHunters aurait pu pour ma part m'apporter de grande joie mais ce n'est pas le cas. Je suis moins intrangisant envers un film qui raconte en 1-2h un livre qui se lit en 5 heure. Alors qu'une série qui peut raconter et suivre l'oeuvre originale sans trop de modifications. A, pour ma part apporter trop de changements même si ceux-ci sont peut-être minimes. Ces changements m’ont empêché de poursuivre le visionnage. Cela étant dit l'univers peut-être pas mal selon les critiques extérieurs ou pour les amateurs du genre. 
				</p>
				</div>				
			</section>

			<section>
				<!--Bande annonce-->
				<div class="type3">
				<h3>Bande Annonce</h3>
				<iframe src="https://www.youtube.com/embed/yx3KONkHtxg" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
	</main>

	<footer>
			<a href="https://www.allocine.fr/series/ficheserie_gen_cserie=18245.html" target="_blank">Allociné</a>
	</footer>
</body>
</html>