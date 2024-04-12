<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="rech.css" rel="stylesheet">
</head>
<body>
<nav class="navbar">
        <div class="img">
            <img src="BannieÌ€re-LogoTT-500x500 copie.png">
        </div>

        <div class="back">
          <a href="home page.php" class="hov"><ins>Back</ins></a>
        </div>
    </nav>  
<?php
include("connection.php");
if (isset($_POST["submit"])) {
    
    $cinToSearch = $_POST["cin"];

    // Requête SQL pour rechercher le CIN dans la table "stagiaire"
    $sql = "SELECT * FROM stagiaire WHERE cin = '$cinToSearch'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        // Afficher les résultats de la recherche

        echo "<script>alert('Trainee Found');</script>";
        echo "<div class='table-container'>";
        echo "<table class='data-table'>";
        echo "<tr><th>CIN</th><th>Nom</th><th>Prénom</th><th>Institut</th><th>Diplôme</th><th>Spécialité</th><th>Date de début</th><th>Date de fin</th><th>Nombre de jours</th><th>Numéro de téléphone</th><th>Sujet de stage</th></tr>";

        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr><td>".$row["cin"]."</td><td>".$row["name"]."</td><td>".$row["surname"]."</td><td>".$row["institute"]."</td><td>".$row["diploma"]."</td><td>".$row["speciality"]."</td><td>".$row["start_day"]."</td><td>".$row["end_day"]."</td><td>".$row["nb_days"]."</td><td>".$row["phone_number"]."</td><td>".$row["internship_subject"]."</td></tr>";
        }

        echo "</table>";
    } else {
        // Aucun résultat trouvé
        echo "<script>alert('Trainee Not Found ');</script>";
        echo "<script>" . "window.location.href='search .php'" . "</script>";
    }
}


?>

</body>
</html>