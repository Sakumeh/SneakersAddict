<!DOCTYPE html>
<html lang="fr">
<head>
<?php 
include("header.php"); 
include("verif.php");
?>

</head>
<body>
<div id="title_container">
  <h1 id="title"> Liste Sneakers</h1></div>
    <div id="feed">

    <?php 
      $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');

      $articles=$bdd->query("SELECT * FROM produit WHERE etat='0' ORDER BY id_product DESC");
      while($article = $articles->fetch()) { ?>
      <div class="sneakers_container">
          <a href='accept.php?id_product="<?php echo $article['id_product'] ?>"'><i class="fas fa-check" style="font-size: 100px; padding-right:50%"></i></a>
          <a href='refuse.php?id_product="<?php echo $article['id_product'] ?>"'><i class="fas fa-times" style="font-size: 100px"></i></a>
        <img class="sneakers_img" src="img/<?=$article['img']?>" alt="">
        <h1 class="sneakers_name"><?= $article['marque']." ".$article['modele']." ".$article['color']?></h1>
        <div class="sneakers_price"><div class="hover_price"></div><h2 class="price_text"><?= $article['prix']." €"?></h2></div>
      </div>
      <?php 
      } 
    ?>
    </div>
   </body> 
</html>


