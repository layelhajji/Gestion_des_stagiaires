<?php
$servername = "localhost";
$username = "layel";
$password = "layelensi1234";
$dbname = "stage";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
   
?>