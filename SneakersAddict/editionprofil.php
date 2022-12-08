<?php
session_start();

$bdd = new PDO('mysql:host=localhost;dbname=projet','root','root');

if(isset($_SESSION['id']))
{
	$requser = $bdd->prepare("SELECT * FROM membres WHERE id = ?");
	$requser->execute(array($_SESSION['id']));
	$user = $requser->fetch();

	if(isset($_POST['newpseudo']) AND !empty($_POST['newpseudo'] AND $_POST['newpseudo'] != $user['pseudo']))
	{
		$newpseudo = htmlspecialchars($_POST['newpseudo']);
		$insertpseudo = $bdd->prepare("UPDATE membres SET pseudo = ? WHERE id = ?");
		$insertpseudo->execute(array($newpseudo, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}

	if(isset($_POST['newmail']) AND !empty($_POST['newmail'] AND $_POST['newmail'] != $user['mail']))
	{
		$newmail = htmlspecialchars($_POST['newmail']);
		$insertmail = $bdd->prepare("UPDATE membres SET mail = ? WHERE id = ?");
		$insertmail->execute(array($newmail, $_SESSION['id']));
		header('Location: profil.php?id='.$_SESSION['id']);
	}

	if(isset($_POST['newmdp1']) AND !empty($_POST['newmdp1']))
	{
		$mdp1 = sha1($_POST['newmdp1']);
		$mdp2 = sha1($_POST['newmdp2']);

		if($mdp1 == $mdp2)
		{
			$insertmdp = $bdd->prepare("UPDATE membres SET motdepasse = ? WHERE id = ?");
			$insertmdp->execute(array($mdp1, $_SESSION['id']));
			header('Location: profil.php?id='.$_SESSION['id']);
		}
		else
		{
			$msg = "Vos deux mots de passe ne correspondent pas !";
		}
	}

	if(isset($_FILES['avatar']) AND !empty($_FILES['avatar']['name']))
	{
		$taillemax = 2097152;
		$extensionValides = array('jpg', 'jpeg', 'gif', 'png');
		if($_FILES['avatar']['size'] <= $taillemax)
		{
			$extensionUpload = strtolower(substr(strrchr($_FILES['avatar']['name'], '.'), 1));
			if(in_array($extensionUpload, $extensionValides))
			{
				$chemin = "membres/".$_SESSION['id'].".".$extensionUpload;
				$resultat = move_uploaded_file($_FILES['avatar']['tmp_name'], $chemin);
				if($resultat)
				{
					$updateavatar = $bdd->prepare('UPDATE membres SET avatar = :avatar WHERE id = :id');
					$updateavatar->execute(array(
						'avatar' => $_SESSION['id'].".".$extensionUpload,
						'id' => $_SESSION['id']

					));
				}
				else
				{
					$msg = "Erreur durant l'importation de votre photo de profil";
				}
			}
			else
			{
				$msg = "Votre image doit être au format jpeg, jpg, gif ou png. ";
			}
		}
		else
		{
			$msg = "Votre photo de profil ne doit pas dépasser 2Mo";
		}
	}

	if(isset($_POST['newpseudo']) AND $_POST['newpseudo'] == $user['pseudo'])
		{
			$msg = "Veuillez de nouveau entrer et confirmer votre mot de passe.";		
		}



?>
<html>
<head>
	<title>espace membres</title>
	<meta charset="utf-8">
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
</head>
<body>
	<div align="center" id= >		
			<form method="POST" action="" enctype="multipart/form-data">
				<h2 class="edition_profil">Edition de mon profil</h2>
				<input type="text" name="newpseudo" placeholder="Pseudo" class="text-field" value="<?php echo $user['pseudo']; ?>" /><br /><br />
				<input type="text" name="newmail" placeholder="Mail" class="text-field" value="<?php echo $user['mail']; ?>"/><br /><br />
				<input type="password" name="newmdp1" placeholder="Mot de passe" class="text-field" /><br /><br />
				<input type="password" name="newmdp2" placeholder="Confirmation du mot de passe" class="text-field"/><br /><br />
				<label>Avatar :</label>
				<input type="file" name="avatar" /><br /><br />
				<input type="submit" value="Mettre à jour mon profil" class="text-field-connexion"><br /><br />

				<?php if(isset($msg)) { echo $msg; } ?>
			</form>		
	</div>
</body>
</html>

<?php
}
else
{
	header("Location: connexion.php");
}
?>




<style type="text/css">
	body{
	background-image:url(img/background_connexion.jpg);
	font-family: 'Source Sans Pro', sans-serif;
}

.edition_profil {
	font-size: 30px;
}
form {
    width: 500px;
    height: 550px;
    margin: 200px auto;
    background: white;
    border-radius: 3px;
    box-shadow: 0 0 10px rgba(0,0,0, .4);
    text-align: center;
    padding-top: 1px;
}
 
 
form .text-field {                                                                          /* Input fields; Username, Password etc. */
    border: 1px solid #a6a6a6;
    width: 230px;
    height: 40px;
    border-radius: 3px;
    margin-top: 10px;
    padding-left: 10px;
    color: #6c6c6c;
    background: #fcfcfc;
    outline: none;
}
 


form .text-field-connexion {                                                                          /* Input fields; Username, Password etc. */
    border: 1px solid #a6a6a6;
    width: 230px;
    height: 40px;
    border-radius: 3px;
    margin-top: 10px;
    padding-left: 10px;
    color: #6c6c6c;
    background: #e5e5e5;
    outline: none;
}
 


</style>