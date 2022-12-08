<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("header.php"); 
if(!isset($_SESSION['co'])) header('Location: index.php');


$db = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');



?>
</head>
    <body>
        <div class="contact-section">
        <h1>Mon profil</h1>
        <div class="border"></div>
        <form class="contact-form" action="index.php" method="post">
            <input type="text" class="contact-form-text" placeholder="Civilité">
            <input type="text" class="contact-form-text" placeholder="Nom">
            <input type="text" class="contact-form-text" placeholder="Prénom">
            <input type="text" class="contact-form-text" placeholder="Adresse">
            <input type="text" class="contact-form-text" placeholder="Ville">
            <input type="text" class="contact-form-text" placeholder="Code Postal">
            <input type="text" class="contact-form-text" placeholder="Téléphone">
            <input type="email" class="contact-form-text" placeholder="E-mail">
            <input type="submit" class="contact-form-btn" value="Enregistrer">
        </form>
        </div>
    </body>
    <?php include('footer.php') ?>
</html>
