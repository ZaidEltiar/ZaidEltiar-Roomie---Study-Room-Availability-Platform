<?php
$servername = "localhost"; // Usually localhost
$username = "id21820208_roomie";
$password = "Ww1234567!";
$dbname = "id21820208_roomavailability";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
