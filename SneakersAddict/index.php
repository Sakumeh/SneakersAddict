<!DOCTYPE html>
<html lang="fr">
<head>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">

<?php include("header.php"); ?>
</head>
<body>
   <div style="height: 100px"></div> 
    <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
    <!-- Overlay -->
    <div class="overlay"></div>

    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#bs-carousel" data-slide-to="1"></li>
        <li data-target="#bs-carousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
        <div class="item slides active">
        <div class="slide-1"></div>
        <div class="hero">
            <hgroup>
                <h1>COMING SOON !</h1>
                <h3>Air Jordan 4 “White/Metallic Red”</h3>
            </hgroup>
            <a href="article2.php"><button class="btn btn-hero btn-lg" role="button">Lire l'article</button></a>
        </div>
        </div>
        <div class="item slides">
        <div class="slide-2"></div>
        <div class="hero">
            <hgroup>
                <h1>Je veux vendre ma chaussure !</h1>
                <h3>Connecte toi ou inscris toi pour vendre au plus vite !</h3>
            </hgroup>
        <a href="vente.php"><button  class="btn btn-hero btn-lg" role="button">Vendre !</button></a>
        </div>
        </div>
        <div class="item slides">
        <div class="slide-3"></div>
        <div class="hero">
            <hgroup>
                <h1>Ecrivez nous maintenant</h1>
                <h3></h3>
            </hgroup>
            <a href="contact.php"><button  class="btn btn-hero btn-lg" role="button">Prenons contact</button></a>
        </div>
        </div>
    </div> 
    </div>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
<?php include('footer.php') ?>
</body>

</html>