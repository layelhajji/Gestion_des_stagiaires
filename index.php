<?php 
    include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>login page</title>
    <link href="https://fonts.googleapis.com/css2?family=Cardo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-rO+919vLgl1UGwJ1TNEKjZo80pTxBMD7jxmB+G3Xq8U6yDgTHS+R6jvlU2Q8f84W4x4Zf/6YYpwzXIm8uyyWig==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" >
   
</head>
<body>

  <div class="img">
    <img src="BannieÌ€re-LogoTT-500x500 copie.png">
  </div>
  <div class="box">
     <div class="container">
     <header>Login Admin</header>
      <br>
      <form method="POST" action="login.php">
        <div class="input-field">
        <input type="text" class="input" placeholder="Username" name="user" required> 
        <i class="fas fa-user"></i> 
        </div>
        <br>
        <div class="input-field">
        <input type="password" class="input" placeholder="Password" name="pass" required>
        <i class="fas fa-lock"></i>
        </div>
        <br><br>
        <br>
        <div class="input-field">
          <input type="submit" class="submit" value="login"  name="submit" >
        </div>
      
      </form>
    
  </div>
  
    </body>
    </html>