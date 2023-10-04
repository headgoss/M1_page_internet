<!DOCTYPE html>
<html lang="fr">
<head>
	<title>Page de Connexion</title>
	<meta charset="utf-8"/>	
	<link rel="stylesheet" type="text/css" href="css/page_connexion.css">
</head>
<body>
	<form method="post" action="bienvenu.php"><!--lien vers la page en php-->
		<fieldset><!--Création du premier bloc avec toute informations obligatoires-->
			<legend>Information obligatoire</legend><!--Ce que sera le bloc-->
			
				<label class="classe">Votre prénom :</label>  <input type="text" name="prenom" id="prenom" placeholder="ex : Mathieu" required="required" /><br/><br/><!--Notre prénom à rentré-->
				<label class="classe">Votre Nom :</label>  <input type="text" name="Nom" id="Nom" placeholder="ex : Grossard" required="required" /><br/><br/><!--Notre nom à rentré-->
				<label class="classe" for="pass">Entrez votre mot de passe :</label><input type="password" name="passe" id="pass" required="required"/><br/><br/><!--Notre mot de passe-->
				<label class="classe" for="mail">Entrez votre mail :</label> <input type="email" name="mail" id="mail" placeholder="grossard.mathieu@gmail.com" required="required"/><br/><br/><!--Notre adresse mail-->
				
					Choisissez votre genre : <br/><!--Ici c'est une chekbox ou on met nottre genre-->
						<input type="radio" name="genre" id="homme" required="required"/><label for="homme">Masculin</label><br/>
						<input type="radio" name="genre" id="femme" required="required"/><label for="femme">Féminin</label><br/><br/>
			
		</fieldset><!--fin du premier bloc-->

		<fieldset><!--Création du deuxième bloc-->
			<legend>Informations facultatives</legend><!--Le contenu du deuxième bloc-->
					Quel âge avez-vous ?<br/><!--l'âge de la personne-->
						<input type="radio" name="age" id="mineur" value="mineur" /><label for="mineur">- 18 ans</label><br/>
						<input type="radio" name="age" id="majeur" value="majeur" checked="checked" /><label for="majeur">+ 18 ans</label>

		</fieldset><!--fin du premier bloc-->
		
			<input type="submit" name="Valider"/><!--lien vers la page en php-->
		
	</form>

</body>
</html>