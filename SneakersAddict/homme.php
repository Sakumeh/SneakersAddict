<!DOCTYPE html>
<html lang="fr">
<head>
<?php include("header.php"); ?>
</head>
<body>
<div id="title_container">
  <h1 id="title"> Sneakers Homme</h1>
  
  <form id="serge_bar" method="GET">
    <input type="text" name="q" id="q">
    <button type="submit"><i class="fas fa-search"></i> </button>
  </form>
  </div>
    <div id="feed">

    <?php 
      $bdd = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
        $articles=$bdd->query("SELECT * FROM produit WHERE sexe = 'h' and etat='1' ORDER BY id_product DESC");

      
      while($article = $articles->fetch()) { 
        if (isset($_GET['q']) && $_GET['q']!="") {

          $p=strtolower($_GET['q']);
          if(strpos($p,strtolower($article['modele']))===false && strpos(strtolower($article['marque']),$p)===false && strpos(strtolower($article['modele']),$p)===false && strpos($p,strtolower($article['marque']))===false) continue;
        }
        ?>   
      <a href="achat.php?id_product=<?= $article['id_product'] ?>"class="sneakers_container">
        <img class="sneakers_img" src="img/<?=$article['img']?>" alt="">
        <h1 class="sneakers_name"><?= $article['marque']." ".$article['modele']." ".$article['color']?></h1>
        <div class="sneakers_price"><div class="hover_price"></div><h2 class="price_text"><?= $article['prix']." €"?></h2></div>
      </a>
      <?php 
      } 
    ?>
    </div>
    <?php include('footer.php') ?>
   </body> 
</html>