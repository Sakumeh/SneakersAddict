<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("header.php"); ?>
</head>
<body>
    <?php 
    
    if(isset($_GET['id_product'])){
        $id=$_GET['id_product'];
        $db = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');

        $sql = "SELECT * FROM produit WHERE id_product=$id";
        $result=$db->query($sql);

        if($result->rowCount() <= 0){
            header('Location: index.php');
        }
        $row=$result->fetch();?>
        
        <img src="img/<?=$row['img']?>"alt="">
        <p id="achat_marque"> <?=$row['marque']?></p>
        <p id="achat_modele"> <?=$row['modele']?></p>
        <p id="achat_color"> <?=$row['color']?></p>
        <p id="achat_prix"> <?=$row['prix']?>€</p>
        <?php
    }else{
        header('Location: index.php');
    }
    
    ?>
    <a href="achatconf.php"><button  class="btn btn-hero btn-lg" role="button">Acheter</button></a>
    <?php include('footer.php') ?>
</body>