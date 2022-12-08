<!DOCTYPE html>
<html lang="en">

<head>
<?php include("header.php");
if(isset($_SESSION['co'])) header('Location: index.php'); ?>
</head>
    <body>
    <section id="connexion">
            <form class='box' action="connecter.php" method="POST">
                <h1> Connexion </h1>
                <input type="Email" name="Email" placeholder="Email">
                <input type="Password" name="Password" placeholder="Mot de passe">
                <a href="inscription.php">Créer un compte</a>
                <a href="">Mot de passe oublié?</a>
                <input type="submit" name="Connexion" value="Connexion">
                <?php
                if(isset($_GET['e']))
            {
                ?>
                <p id='error'>
                    <?php switch ($_GET['e']) {
                        case 1: 
                            echo 'Identifiants ou mot de passe incorrect.';
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