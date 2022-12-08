<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("header.php"); ?>
</head>
    <body>
        <div class="contact-section">

        <h1>Contact Us</h1>
        <div class="border"></div>
        <form class="contact-form" action="index.php" method="post">
            <input type="text" class="contact-form-text" placeholder="Nom Prénom">
            <input type="email" class="contact-form-text" placeholder="E-mail">
            <input type="text" class="contact-form-text" placeholder="Téléphone">
            <textarea class="contact-form-text" placeholder="Votre message"></textarea>
            <input type="submit" class="contact-form-btn" value="Envoyer">
        </form>
        </div>
        <?php include('footer.php') ?>
    </body>
</html>