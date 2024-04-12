<?php 
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>insert</title>
  <link rel="stylesheet" href="insert.css">
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
  <div class="form-container">
    <form methode="POST" action="ins.php">
      <label for="cin">CIN :</label>
      <input type="text" id="cin" name="cin" required>
      
      <label for="name">Name :</label>
      <input type="text" id="name" name="name" required>

      <label for="surname">Surname :</label>
      <input type="text" id="surname" name="surname" required>

      <label for="institute">Institute :</label>
      <input type="text" id="institute" name="institute" required>

      <label for="diploma">Diploma :</label>
      <input type="text" id="diploma" name="diploma" required>

      <label for="speciality">Speciality :</label>
      <input type="text" id="speciality" name="speciality" required>

      <label for="start_day">Start day :</label>
      <input type="date" id="start_day" name="start_day" required>

      <label for="end_day">End day :</label>
      <input type="date" id="end_day" name="end_day" required>

      <label for="nb_days">Nb days :</label>
      <input type="int" id="nb_days" name="nb_days" required>

      <label for="phone_number">Phone Number:</label>
      <input type="tel" id="phone_number" name="phone_number" required>

      <label for="internship_subject">Internship Subject :</label>
      <textarea id="internship_subject" name="internship_subject" required></textarea>

      <button type="submit" name="submit" >Insert</button>
        
      
    </form>
  </div>
</body>
</html>

