<?php
if(count($_POST))
{   
    $email = $_POST['Email'];
    $password = $_POST['Password'];

    //$conee = mysqli_connect("localhost", "root", "", "workshop");
    $conee = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
    
    $sql = "SELECT * FROM utilisateur where Email = '$email' and MotDePasse = '$password'";
    //echo $sql;
    $result = $conee->query($sql);
    
    $row = $result->fetch();
    if ($row['Email'] == $email && $row['MotDePasse'] == $password)
    {
        echo "'Bienvenue ' . $email .'!'";
        session_start();
        $_SESSION['id']=$row['id_user'];
        $_SESSION['co']=1;
        $_SESSION['Prenom']=$row['Prenom'];
        $_SESSION['admin']=$row['admin'];
        header('Location: index.php');
        
    }
    else
    {
        header('Location: connexion.php?e=1');
    }
}
?>
