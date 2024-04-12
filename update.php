<?php
include("connection.php");

if (isset($_POST["submit"])) {
    $cinToUpdate = $_POST["cin"];
    $name = $_POST["name"];
    $surname = $_POST["surname"];
    $institute = $_POST["institute"];
    $diploma = $_POST["diploma"];
    $speciality = $_POST["speciality"];
    $start_day = $_POST["start_day"];
    $end_day = $_POST["end_day"];
    $nb_days = $_POST["nb_days"];
    $phone_number = $_POST["phone_number"];
    $internship_subject = $_POST["internship_subject"];


    
    $sql = "UPDATE stagiaire SET name = '$name', surname = '$surname' ,institute='$institute',diploma='$diploma',
    speciality='$speciality', start_day='$start_day', end_day='$end_day',nb_days='$nb_days',phone_number='$phone_number',
    internship_subject ='$internship_subject'
     WHERE cin = '$cinToUpdate'";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Data updated successfully');</script>";
        echo "<script>" . "window.location.href='viewall.php'" . "</script>";
    } else {
        echo "Erreur lors de la mise à jour des données : " . mysqli_error($conn);
    }
}
?>
