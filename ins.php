<?php
include("connection.php"); 
    
if (isset($_GET["submit"])) {
    $cin = $_GET["cin"];
    $name = $_GET["name"]; 
    $surname = $_GET["surname"];
    $institute = $_GET["institute"];
    $diploma = $_GET["diploma"];
    $speciality = $_GET["speciality"];
    $start_day = $_GET["start_day"];
    $end_day = $_GET["end_day"];
    $nb_days = $_GET["nb_days"];
    $phone_number = $_GET["phone_number"];
    $internship_subject = $_GET["internship_subject"];

    $sql = "SELECT * FROM stagiaire WHERE cin = '$cin'";
    $result = mysqli_query($conn, $sql);
    $count_cin = mysqli_num_rows($result);

    if ($count_cin == 0) {
        $sql = "INSERT INTO stagiaire (cin, name, surname, institute, diploma, speciality, start_day, end_day, nb_days, phone_number, internship_subject)
        VALUES ('$cin', '$name', '$surname', '$institute', '$diploma', '$speciality', '$start_day', '$end_day', $nb_days, '$phone_number', '$internship_subject')";
        
        $result = mysqli_query($conn, $sql);
        
        if ($result) {
            echo "<script>alert('Data inserted successfully');</script>";
            echo "<script>" . "window.location.href='home page.php'" . "</script>";

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }     
    } else {
        echo "<script>alert('CIN already exists!!');</script>";
        echo "<script>" . "window.location.href='insert.php'" . "</script>";


    }
}
?>
