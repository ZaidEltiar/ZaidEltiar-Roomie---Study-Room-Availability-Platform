<?php
include 'db_connect.php';

// Get data from the request
$room_name = $conn->real_escape_string($_POST['room']);
$availability = $conn->real_escape_string($_POST['availability']);

$sql = "UPDATE rooms SET availability = '$availability' WHERE room_name = '$room_name'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>
