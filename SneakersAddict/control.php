<?php 


$bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');


if(isset($_POST['formulaire']))
{
	if(!empty($_POST['Nom']) AND !empty($_POST['Prenom']) AND !empty($_POST['Email']) AND !empty($_POST['MotDePasse'])) 
	{
		$Nom = htmlspecialchars($_POST['Nom']);
		$Prenom = htmlspecialchars($_POST['Prenom']);
		$Email = htmlspecialchars($_POST['Email']);
		$MotDePasse = sha1($_POST['MotDePasse']);
	}
	else
	{
		$erreur = "Tous les champs doivent être complétés";
	}
		
	
}

?>





<html>
	<head>
	</head>
	<body>
		<div align="center">
		<h2> INSCRIPTION <h2>
			<br><br><br>
			<form method="POST" action="">
				<table>
					<tr>
						<td align="right">
							<label for="Nom"> Nom : </label>
						</td>
						<td>
							<input type="text" placeholder="Votre Nom" id="Nom" name="Nom">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="Prenom"> Prenom : </label>
						</td>
						<td>
							<input type="text" placeholder="Votre Prenom" id="Prenom" name="Prenom">
						</td>
					</tr>	
					<tr>
						<td align="right">
							<label for="Email"> Email : </label>
						</td>
						<td>
							<input type="mail" placeholder="Votre Email" id="Email" name="Email">
						</td>
					</tr>
					<tr>
						<td align="right">
							<label for="MotDePasse"> Mot De Passe : </label>
						</td>
						<td>
							<input type="password" placeholder="Votre Mot de Passe" id="MotDePasse" name="MotDePasse">
						</td>
					</tr>
					<tr>
						<td></td>
						<td><input type="submit" name="Je m'inscris">
						</td>
					</tr>		
				</table>							
			</form>
			<?php 
			if (isset($erreur))
			{
				echo $erreur;
			}
			?>
	</body>
</html>