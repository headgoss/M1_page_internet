<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Loki</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/serie.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Loki";

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
						<p>Redécouverte d'un dieu des plus marrants</p>
					</aside>
				
				<p class="ecriture">
					La nouvelle série Disney+ Original des studios Marvel « Loki » se déroule après les événements relatés dans AVENGERS: ENDGAME. Elle met en scène le dieu de la malice juste après qu’il s'est affranchi de son frère Thor. 
				</p>
				</div>				
			</section>
			<section>
				<!--Avis Personnel-->
				<div class="type3">
				<h3>Avis Personnel</h3>
				<p>
					« Loki », la troisième série des studios Marvel sur Disney+ après « WandaVision » et « Falcon et le Soldat de l'Hiver » est sans doute la série la plus attendue de l’année. Dotée d’une intrigue à la fois intelligente et ambitieuse, la série portée par Tom Hiddleston toujours aussi formidable dans le rôle du dieu de la malice s’impose comme l’une des meilleures de la franchise. Avec un récit qui nous amène là où on ne l’attend pas et des easters eggs qui font plaisir aux fans, les six épisodes de cette première saison nous embarquent dans une folle aventure captivante rythmée de rebondissements improbables. À l’image de son (anti)-héros imprévisible, la série prend le temps de développer plus en profondeur ce dernier et nous intrigue par ses intéressants personnages, notamment par des variants complètement délirants. On apprécie d’ailleurs, le jeu d’Owen Wilson en agent Mobius ainsi que Gugu Mbatha-Raw et Sophia Di Martino dans les rôles féminins qui complètent cette talentueuse tête d’affiche. Visuellement supérieure à WandaVision (qui était pourtant très spectaculaire), la série « Loki » dispose d’effets visuels sans limites et haut en couleur à couper le souffle qui nous font voyager à travers un univers temporel impressionnant. Outre que la série ait toutes les conditions pour devenir l’un des plus gros succès de l’année, elle aura surtout un impact considérable dans la suite du MCU dont a hâte de suivre avec impatience.
				</p>
				</div>				
			</section>

			<section>
				<!--Bande Annonce-->
				<div class="type3">
				<h3>Bande Annonce</h3>
				<iframe src="https://www.youtube.com/embed/iYpS70gCsvw" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
				</div>
			</section>
	</main>

	<footer>
			<a href="https://www.allocine.fr/series/ficheserie_gen_cserie=24172.html" target="_blank">Allociné</a>
	</footer>
</body>
</html>