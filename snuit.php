<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Les Soeurs de la Lune</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/M_I.css">
</head>

<body>
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="Les Soeurs de la Lune";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<section>
			<!--Info générale-->
			<h2>Avis</h2>
			<div class="type">
					<aside>
						La série à découvrir pour se plonger dans un <strong>monde</strong> qui en découvre un autre.
					</aside>
				<p>
					Les Soeurs de la Lune suivent l'histoire d'une fratrie de soeur qui travaille pour une agence. Suiver les soeurs qui marche entre ces deux mondes et font le lien et les protège malgré leurs difficultés et rencontre. 
				<p>
			</div>							
		</section>
		<br><br><br><br><br>
		<section>
			<!--Premier livre-->
			<div class="type4">
				<img class="type5" src="Images/SL.jpg" alt="Tome 1 " title="Tome 1">
			<h3>Les Soeurs de la Lune</h3>
					<p>
						Livre très apprécié par la chronique pour sa possibilité de relecture et en attente de la suite.<br>
						On peut plonger dans cet univers sans aucun souci.
					</p>
					<p class="ecriture">
						Nous sommes les soeurs D'Artigo : mi-humaine, mi-fae, agents de la CIA d'Outremonde. Etre une fae dans votre monde confère bien des avantages : nous sommes plutôt bien perçues, contrairement à nos congénères un peu moins disons... sexy.

						Malheureusement, notre ascendance nous joue parfois des tours. Quand elle panique, ma soeur Delilah se transforme en chat. Menolly, elle, est un vampire qui tente de s'adapter à sa nouvelle condition. Quand à moi ? Je suis Camille... une sorcière.

						Ensemble nous formons une équipe de choc prête à tout pour déjouer les complots maléfiques de notre pire ennemi : l'Ombre Ailée. Un terrifiant chef suprême démoniaque bien décidé à anéantir le monde des humains comme celui des faes. 
					</p>
				</div>
		</section>		
	</main>

	<footer>
			<a href="https://booknode.com/auteur/yasmine-galenorn" target="_blank">Booknode</a>
	</footer>
</body>
</html>