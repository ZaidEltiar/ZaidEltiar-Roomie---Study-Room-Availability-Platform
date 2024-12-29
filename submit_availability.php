<?php
include 'db_connect.php';

$room_name = $_POST['room_name'];
$availability = $_POST['availability'];

$sql = "UPDATE rooms SET availability = ? WHERE room_name = ?";

$stmt = $conn->prepare($sql);
if (!$stmt) {
    die("Error preparing statement: " . $conn->error);
}
$stmt->bind_param("ss", $availability, $room_name);
if (!$stmt->execute()) {
    die("Error executing statement: " . $stmt->error);
}

echo "Room availability updated successfully";

$stmt->close();
$conn->close();
?>
