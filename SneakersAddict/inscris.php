<?php

if (count($_POST))
{
    $nom = $_POST['Nom'];
    $prenom = $_POST['Prenom'];
    $email = $_POST['Email'];
    $password = $_POST['Password'];
    $password2 = $_POST['Password2'];


    $db = new PDO('mysql:host=localhost;dbname=projet', 'root', 'root');
    $sql = "INSERT INTO utilisateur (`Nom`, `Prenom`, `Email`, `MotDePasse`) VALUES ('$nom','$prenom','$email','$password')";
    echo $sql;

    $verif = "SELECT id_user FROM utilisateur WHERE Email = '$email'";
    $verifrequest = $db->query($verif);
    $count = $verifrequest->rowCount();

        if ($count==0)
        {   
            if (!empty($nom) && !empty($prenom) && !empty($email) && !empty($password) && !empty($password2))
            {
                if (strlen($password)>=6)
                {
                    if ($password == $password2)
                    {    
                        $hashpass = password_hash($password, PASSWORD_DEFAULT);
                        //$result = mysqli_query($db, $sql);  
                       
                        $db->query($sql);
                        header('Location: index.php');
                    }
                    else
                    {
                        header('Location: inscription.php?e=1');//'Les mots de passses ne sont pas identiques.';
                    }
                }
                else
                {
                   header('Location: inscription.php?e=2');// echo 'Le mot de passe est trop court.';
                }
            }
            else
            {
                header('Location: inscription.php?e=3');//echo "Les champs ne sont pas remplies.";
            }
        }
        else 
        {
            header('Location: inscription.php?e=4');//echo 'Le mail choisis est déjà utiliser.';
        }
}
?>