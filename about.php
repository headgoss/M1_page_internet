<!DOCTYPE html>
<html lang="fr">
<head>
	<title>About</title>
	<meta charset="utf-8"/>
	<link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>	
	<!--Header avec son titre personnalisé mais en utilisant include-->
	<?php

	$PageTitle="About";

	function customPageHeader(){?>
 	 <!--Arbitrary HTML Tags-->
	<?php }

	include_once('header.php');
	?>

	<main>
		<!--Sectionde contact du créateur-->
			<section>
				<h3>Contact</h3>
					<aside>
						<p>Informations sur le créateur</p>
					</aside>				
				<p>
					Identité : GROSSARD Mathieu <br>
				</p>
				<p>
					Parcours : M1 EEA FST de Mulhouse<br>
				</p>
				<p>
					Contact  : mathieu.grossard@uha.fr <br>
				</p>			
			</section>
	</main>

	<footer>
			<a href="https://about.me/mathieu.grossard" target="_blank">Portfolio</a>
	</footer>
</body>
</html>