<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Rebecca Kean</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/M_I.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Rebecca Kean";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<div class="type">
		<section>
			<!--Section générale-->
			<h2>Avis</h2>
			
					<aside>
						L'un des livres <mark>préférés</mark> que l'on peut lire et relire à notre convenance
					</aside>
				<p>
					<em>Rebecca Kean</em> raconte les aventures d'une mère puissante qui fuit sa tribu pour avoir donné naissance à sa fille. Se retrouvant dans une certaine ville où un vampire reconnaît sa tribu elle doit marchander pour protéger son secret. N'hésitez pas à vos aventurer pour découvrir son histoire et ses aventures. 
				<p>
										
		</section>
		</div>
		<div class="type4">
			<section>
				<!--Premier livre-->
				<img class="type5" src="Images/RK.jpg" alt="Tome 1 " title="Tome 1">
				<h2>Rebecca Kean</h2>
					<p>
						Livre très apprécié par la chronique pour sa possibilité de relecture.<br>
						On peut plonger dans cet univers sans aucun souci.
					</p>
					<p class="ecriture">
						Burlington... Nouvelle-Angleterre. Pas de délinquance, élue la ville la plus paisible des États unis, bref un petit havre de paix pour une sorcière condamnée à mort et bien décidée à vivre discrètement et clandestinement, parmi les humains. Malheureusement, en arrivant ici, je me suis vite aperçue que la réalité était tout autre et qu'il y avait plus de démons, de vampires, de loups garous et autres prédateurs ici que partout ailleurs dans ce foutu pays. Mais ça, évidemment, ce n'est pas le genre de renseignements fournis par l'office de tourisme. Maudit soit-il...
					</p>				
			</section>
		</div>

		<div class="type4">
			<section>			
			<img class="type5" src="Images/LK.jpg" alt="Tome 1 " title="Tome 1">
			<!--Spin-off-->
				<h2>Leonora Kean</h2>
					<p>
						Le spin-off de Rebecca Kean parle de sa fille qui a été envoyé en france pour vivre avec la tribu de sa mère.
					</p>
					<p class="ecriture">
						Vivre, quand on a seize ans, au sein d'un clan de sorcières sociopathes n'est pas facile tous les jours, moi, je vous le dis.

						Entre les cours de sortilèges, de potions et de magie élémentaire des Vikaris, je suis au bout du rouleau.

						Alors, si en plus, on commence à ramasser les cadavres dans tous les coins, je sens que je ne vais pas tarder à provoquer un massacre.

						Parce qu'on peut dire ce qu'on veut : la patience, chez nous, n'est décidément pas un trait de famille...
					</p>				
			</section>
		</div>
		
	</main>

	<footer>
			<a href="https://booknode.com/auteur/cassandra-o-donnell" target="_blank">Booknode</a>
	</footer>
</body>
</html>