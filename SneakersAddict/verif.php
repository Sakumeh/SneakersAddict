<?php 
    if(!isset($_SESSION['co'])) header('Location: index.php');

    $db = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
        $id=$_SESSION['id'];
        $sql = "SELECT * FROM utilisateur WHERE id_user='$id'";

        $result=$db->query($sql);

        if($result->rowCount()<=0) header('Location: index.php');
        $row=$result->fetch();  
        if($row['admin']!=1) header('Location: index.php');

?>