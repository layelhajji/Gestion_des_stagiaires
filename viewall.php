<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>view all</title>
    <link href="viewall.css" rel="stylesheet">
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
    
    // Requête SQL pour afficher toutes les données de la table "stagiaire"
    $sql = "SELECT * FROM stagiaire";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='table-container'>";
        echo "<table class='data-table'>";
        echo "<tr><th>CIN</th><th>Name</th><th>Surname</th><th>Institute</th><th>Diploma</th><th>Speciality</th><th>Start day</th><th>End day</th><th>Nb days</th><th>Phone Number</th><th>Internship Subject</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row["cin"]."</td>";
            echo "<td>".$row["name"]."</td>";
            echo "<td>".$row["surname"]."</td>";
            echo "<td>".$row["institute"]."</td>";
            echo "<td>".$row["diploma"]."</td>";
            echo "<td>".$row["speciality"]."</td>";
            echo "<td>".$row["start_day"]."</td>";
            echo "<td>".$row["end_day"]."</td>";
            echo "<td>".$row["nb_days"]."</td>";
            echo "<td>".$row["phone_number"]."</td>";
            echo "<td>".$row["internship_subject"]."</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "No records found..";
    }
?>
</body>
</html>
