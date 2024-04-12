
<?php
include("connection.php");

if (isset($_POST["submit"])) {
    $cinToSearch = $_POST["cin"];

    // Requête SQL pour rechercher le stagiaire avec le CIN dans la table "stagiaire"
    $sql = "SELECT * FROM stagiaire WHERE cin = '$cinToSearch'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        ?>

        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Modify Trainee</title>
            <link href="mod.css" rel="stylesheet">
        </head>
        <body>
            <nav class="navbar">
                <div class="img">
                    <img src="BannieÌ€re-LogoTT-500x500 copie.png">
                </div>
                <div class="back">
                    <a href="modify.php" class="hov"><ins>Back</ins></a>
                </div>
            </nav>

            
            <div class="form-container">
                    <form method="post" action="update.php">
                    <label for="cin">CIN :</label>
                    <input type="text" id="cin" name="cin" value="<?php echo $row["cin"]; ?>" required>
      
                    <label for="name">Name :</label>
                    <input type="text" id="name" name="name" value="<?php echo $row["name"]; ?>" required>

                    <label for="surname">Surname :</label>
                    <input type="text" id="surname" name="surname" value="<?php echo $row["surname"]; ?>" required>

                    <label for="institute">Institute :</label>
                    <input type="text" id="institute" name="institute" value="<?php echo $row["institute"]; ?>" required>

                    <label for="diploma">Diploma :</label>
                    <input type="text" id="diploma" name="diploma" value="<?php echo $row["diploma"]; ?>" required>

                    <label for="speciality">Speciality :</label>
                    <input type="text" id="speciality" name="speciality" value="<?php echo $row["speciality"]; ?>" required>

                    <label for="start_day">Start day :</label>
                    <input type="date" id="start_day" name="start_day"  value="<?php echo $row["start_day"]; ?>"required>

                    <label for="end_day">End day :</label>
                    <input type="date" id="end_day" name="end_day" value="<?php echo $row["end_day"]; ?>" required>

                    <label for="nb_days">Nb days :</label>
                    <input type="int" id="nb_days" name="nb_days" value="<?php echo $row["nb_days"]; ?>" required>

                    <label for="phone_number">Phone Number:</label>
                    <input type="tel" id="phone_number" name="phone_number" value="<?php echo $row["phone_number"]; ?>"required>

                    <label for="internship_subject">Internship Subject :</label>
                    <input id="internship_subject" name="internship_subject" value="<?php echo $row["internship_subject"]; ?>"required>

                    <button type="submit" name="submit" >update</button>
                    </form>
                </div>
            
        </body>
        </html>

    <?php
    } else {
        echo "<script>alert('Trainee Not Found');</script>";
        echo "<script>" . "window.location.href='modify.php'" . "</script>";
    }
}
?>

</body>
</html>