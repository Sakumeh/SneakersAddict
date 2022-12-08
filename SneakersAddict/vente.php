<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("header.php"); 
if(!isset($_SESSION['co'])) header('Location: index.php');
?>
</head>
    <body>
    <section id="Vente">
            <form class='box' action="add_sneakers.php" method="POST" enctype="multipart/form-data">
                <h1> Saisis les informations liées à ta paire ! </h1>
                <input type="text" name="marque" placeholder="Marque">
                <input type="text" name="modele" placeholder="Modèle">
                <input type="text" name="color" placeholder="Couleur">
                <input type="number" min="0" name="prix" placeholder="Prix">
                <br>
                <input type="radio" id="sexe" name="sexe" value="h">Homme
                <br>
                <input type="radio" id="sexe" name="sexe" value="f">Femme
                <br>
                <br>
                <input type="file" id="img" name="img" accept="image/png, image/jpeg">
                <br>
                <input type="submit" name="Vendre" value="Vendre">
                <?php
                if(isset($_GET['e']))
            {
                ?>
                <p id='error'>
                    <?php switch ($_GET['e']) {
                        case 1: 
                            echo 'Tout les champs ne sont pas remplis';
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