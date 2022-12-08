<!DOCTYPE html>
<html lang="fr">

<head>
<?php include("header.php");
if(isset($_SESSION['co'])) header('Location: index.php'); ?>
</head>
   <body>
        <section id="connexion">
            <form class='box' action="inscris.php" method="POST">
                <h1 style="margin-left:10px;"> Inscription </h1>
                <input type="Text" name="Nom" placeholder="Votre nom">
                <input type="Text" name="Prenom" placeholder="Votre prénom">
                <input type="Email" name="Email" placeholder="Email">
                <input type="Password" name="Password" placeholder="Mot de passe">
                <input type="Password" name="Password2" placeholder="Confirmez votre mot de passe">
                <input type="submit" name="Inscription" value="Je m'inscris">
                <a href="connexion.php">Déjà un compte?</a>
                <?php 

            if(isset($_GET['e']))
            {
                ?>
                <p id='error'>
                    <?php switch ($_GET['e']) {
                        case 1: 
                            echo 'Les mots de passes ne sont pas identiques.';
                            break;
                        
                        case 2:
                           echo 'Le mot de passe est trop court.';
                            break;
                        case 3: 
                            echo 'Les champs ne sont pas remplis.';
                            break;
                        case 4:
                            echo 'Le mail choisis est déjà utilisé.'; 
                            break;       
                    } ?>
                </p>
                <?php
            }

            ?>
            </form>
        </section>
        <?php include('footer.php') ?>
    </body>

</html>