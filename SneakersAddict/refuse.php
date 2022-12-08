<?php 
$conee = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
$id_product=$_GET['id_product'];
$sql = "DELETE FROM produit WHERE id_product = $id_product";
//echo $sql;
$result = $conee->exec($sql);
header('Location: liste_vente.php');
?>