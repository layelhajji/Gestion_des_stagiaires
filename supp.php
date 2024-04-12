
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
          <a href="search .php" class="hov"><ins>Back</ins></a>
        </div>
    </nav>  
<?php
include("connection.php");
if (isset($_POST["submit"])) {
    
    $cinToSearch = $_POST["cin"];
    $sql = "SELECT * FROM stagiaire WHERE cin = '$cinToSearch'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        

        echo "<script>alert('Trainee Found');</script>";
        $sql = "DELETE FROM stagiaire WHERE cin = '$cinToSearch'";
        $result = mysqli_query($conn, $sql);
    if ($result) {
        
            echo "<script>alert('Data deleted successfully');</script>";
            echo "<script>" . "window.location.href='home page.php'" . "</script>";
    }

    } else {
       
     
        echo "<script>alert('Trainee Not Found ');</script>";
        echo "<script>" . "window.location.href='delete.php'" . "</script>";
    }
}


?>

</body>
</html>