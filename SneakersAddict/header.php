<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>SneakersAddict</title>
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:wght@700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Ranga:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@600&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="css/contact.css">
	<link rel="stylesheet" href="css/search.css">
	<link rel="stylesheet" href="css/form.css">
	<link rel="stylesheet" href="css/carousel.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/base.css">
	<link rel="stylesheet" href="css/header.css">
	<link rel="stylesheet" href="css/articles.css">
	<link rel="stylesheet" href="css/article_view.css">
	<link rel="stylesheet" href="css/sneakers.css">
	<link rel="stylesheet" href="css/footer.css">
	<link rel="stylesheet" href="css/achat.css">
	<script src="https://kit.fontawesome.com/a75a2e2239.js" crossorigin="anonymous"></script>
</head>
<body>
	<div class ="header">
		<div class="header_texture"></div>
		<div class="header_mask">
			<svg width="100%" height="100%" viewBox="0 0 100 100" preserveAspectRatio="none">
				<path d="M0 100 L 0 0 C 25 100 75 100 100 0 L 100 100" fill="#fff"></path>
			</svg>
		</div>
		<div class="container">
			<div class ="header_navbar">
				<div class ="header_navbar_logo">
					<a class="logo" href="index.php">
					<img id ="logo" src="img/logo.png" alt="">
					<img id ="logo_gif" src="img/logo_gif.gif"alt=""></a>
				</div>
				<div class ="header_navbar_menu">
					<a href="homme.php" class="header_navbar_menu_link"><i class="fas fa-male"></i> Homme</a>
					<a href="femme.php" class="header_navbar_menu_link"><i class="fas fa-female"></i> Femme</a>
					<a href="news.php" class="header_navbar_menu_link"><i class="far fa-newspaper"></i> News</a>
					<?php 
					if (isset($userexist))
					{?> <a href="profil.php" class="header_navbar_menu_link"><i class="fas fa-user-circle"></i> <?php echo $_SESSION['Pseudo']?></a>
						 <?php
						 if ($_SESSION['admin']==1){?>
							<a href="liste_vente.php" class="header_navbar_menu_link"><i class="fas fa-user-circle"></i> Administration </a><?php
						 }
						 }else{
						?> 
					<a href="connexion.php" class="header_navbar_menu_link"><i class="fas fa-user-circle"></i> Connexion </a>
						 <?php } ?> 
					<a href="contact.php" class="header_navbar_menu_link"><i class="fas fa-address-book"></i> Contact</a>
				</div>
				<div class="header_navbar_toggle">
					<span class="header_navbar_toggle_icons"></span>
				</div>
			</div>
			<div class="header_slogan">
				<h1 class="header_slogan_title">"More than a simple shoe, a Lifestyle"</h1>
				<a href="https://zupimages.net/viewer.php?id=20/20/0on2.jpg" target="_blank"><i id="fb" class="fab fa-facebook-f icon"></i></a>
				<a href="https://twitter.com/Sneakers_IPSSI" target="_blank"><i id="twi" class="fab fa-twitter icon"></i></a>
				<a href="https://www.instagram.com/sneakersaddict_ippsi/" target="_blank"><i id="insta" class="fab fa-instagram icon"></i></a>
			</div>
		</div>
	</div>
	<script
	 	src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
	<script src="js/app.js"></script>
</body>

</html>