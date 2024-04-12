<?php
include("connection.php");
if (isset($_POST['user']) && isset($_POST['pass'])) {
    // <!-- Récupération des données du formulaire -->
    $username = $_POST['user'];
    $password = $_POST['pass'];

    // <!-- Requête pour récupérer l'enregistrement correspondant au nom d'utilisateur fourni -->
    $query = "SELECT * FROM  login WHERE username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $query);

    // <!-- Vérification de l'existence de l'utilisateur dans la base de données -->
    if (mysqli_num_rows($result) > 0) {
        // <!-- Récupération de l'enregistrement de l'utilisateur -->
        $row = mysqli_fetch_assoc($result);

        // <!-- Vérification du mot de passe -->
        if ($password== $row['password']) {
            // <!-- Stockage des données de l'utilisateur dans la session -->
            $_SESSION['user'] = $username;
            
            echo "<script>
                 alert('Successful connection. Welcome ". $username . "!');
                </script>";
            // redirection vers page d'accueil 
            echo "<script>" . "window.location.href='home page.php'" . "</script>";


            exit();
        } else {
            echo "<script>alert('Incorrect password. Try Again.');</script>";
            echo "<script>" . "window.location.href='index.php'" . "</script>";
         
        }
    } else {
        echo "<script>
        alert('Admin not found. Try Again.');
        </script>";
        echo "<script>" . "window.location.href='index.php'" . "</script>";
    }
}

?>