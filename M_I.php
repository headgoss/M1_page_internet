<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Mortal Instrument</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/M_I.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Mortal Instrument";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<section>
			<!--Section information et avis générale-->
			<h3>Avis</h3>
			<div class="type1">
					<aside>
						Premier <em><mark>coup de coeur</mark></em> qui a permis de se relancer dans la lecture
					</aside>
				<p>
					Mortal Instrument est pour ma part un grand chef d'oeuvre. Il existe d'une part 
					plusieurs séries de bouquins comme on le verra après.
					Mais elle a aussi été adapté en série et film.<br>
					<a href="#1">La cité des ténèbres</a>		
					<br>
					<a href="#2">Les Origines</a>			
					<br>
					<a href="#3">Renaissance</a>						
				<p>
			</div>				
		</section>
		
		<!--Les images à insérer-->
		<img  class="type2" src="Images/FM_I.jpg" alt="Film du livre" title="Film du livre">
		<img  class="type3" src="Images/SM_I.jpg" alt="Serie du livre" title="Serie du livre">		
		

		<section>	
			<!--Informations du premier livre-->					
			<div class="type4">
				<img class="type5" src="Images/M_I1.jpg" alt="Tome 1" title="Tome 1">	
				<div id="1"><h2>Mortal Instrument : La Cité des ténèbres</h2></div>
						<p>
							Corresponds à la première série de lectures qui a renouvelé l'implication dans la lecture de l'auteur. Grandement apprécié par plusieurs types de personne. Une lecture à faire des plus recommandés. 
						</p>
						<p class="ecriture">
							New York, de nos jours. Au cours d’une soirée, Clary, 15 ans, est témoin d’un meurtre. Elle est terrifiée lorsque le corps de la victime disparaît mystérieusement devant ses yeux… Elle découvre alors l’existence d’une guerre invisible entre des forces démoniaques et la société secrète des Chasseurs d’Ombres. Le mystérieux Jace est l’un d’entre eux. À ses côtés, Clary va jouer dans cette aventure un rôle qu’elle n’aurait jamais imaginé.
						</p>
			</div>	
		</section>	
			
		<section>
			<!--Informations du premier spin-off-->
			<div class="type4">
				<img class="type5" src="Images/M_I2.jpg" alt="Tome 1 " title="Tome 1">
			<div id="2"><h3>Mortal Instrument : La Cité des ténèbres : Les Origines</h3></div>
				<p>
					Considéré comme le <strong>spin-off</strong> préféré et principal lors de sa lecture. Grandement apprécié par plusieurs types de personne.	Une lecture à faire des plus recommandés.
				</p>
				<p class="ecriture">
					Tessa débarque à Londres pour rejoindre son frère. Mais à peine arrivée, elle tombe dans un piège: enlevée par les horribles Soeurs Noires, elle développe des pouvoirs qu'elle ignorait posséder. Jusqu'au jour où Will, un Chasseur d'Ombres, la libère et lui apprend qu'elle est une Créature Obscure. Un nouveau destin attend Tessa dans un monde mystérieux, où vampires, sorciers et autres créatures de l'ombre règnent en maîtres...
				</p>
			</div>
		</section>
		<section>
			<!--Informations de la suite-->
			<div class="type4">
				<img class="type5" src="Images/M_I3.jpg" alt="Tome 1 " title="Tome 1">
			<div id="3"><h4>The Mortal Instruments - Renaissance</h4></div>
				<p>
					Dernière lecture en date qui n'est pas encore fini pas d'avis tranché dessus.
				</p>
				<p class="ecriture">
					Après le meurtre de ses parents, Emma Carstairs rejoint l'Institut des Blackthorn pour devenir une redoutable Chasseuse d'Ombres. Et quand des crimes similaires sont découverts, elle est décidée à retrouver l'assassin et à se venger.

					Mais dans sa quête de vérité émergent de nombreuses questions : que veulent dire ces étranges inscriptions sur les corps ? Pourquoi l'Enclave leur a-t-elle interdit de chercher le coupable ? Et surtout, pourquoi ses pouvoirs de parabatai deviennent-ils aussi puissants en présence de Julian ?
				</p>
			</div>
		</section>
	</main>

	<footer>
			<p><a href="https://booknode.com/auteur/cassandra-clare/livres" target="_blank">Booknode</a></p>
	</footer>
</body>
</html>