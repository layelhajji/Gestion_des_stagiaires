<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modify page</title>
    <link href="modify.css" rel="stylesheet">
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
    
    <div class="box">
        <div class="container">
            <form method="post" action="mod.php">
                <div class="input-field">
                    <label for="cin">cin</label>
                    <input type="text" class="input" name="cin" required>
                </div>
                
                <div class="button-container">
                    <button type="submit" class="submit"  name="submit" >Submit</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
