<?php
if (!empty($_POST['marque']) && !empty($_POST['modele']) && !empty($_POST['color']) && !empty($_POST['prix']) && !empty($_POST['sexe']) && isset($_FILES['img'])){
    $marque = $_POST['marque'];
    $modele = $_POST['modele'];
    $color = $_POST['color'];
    $prix = $_POST['prix'];
    $sexe = $_POST['sexe'];
    $img = $_FILES["img"]["name"];



    $dest ="img/";
    $dest_file = $dest.basename($_FILES["img"]["name"]); 

    move_uploaded_file($_FILES["img"]["tmp_name"],$dest_file);


    

    $db = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');

    $sql = "INSERT INTO produit (`marque`, `modele`, `color`, `prix`, `sexe`, `img`) VALUES ('$marque','$modele','$color','$prix','$sexe','$img')";
    $db->query($sql);



    if($sexe=='f'){
        header('Location: femme.php');
    }else{
    header('Location: homme.php');
    }
}else {

    header('Location: vente.php?e=1');
}

?>