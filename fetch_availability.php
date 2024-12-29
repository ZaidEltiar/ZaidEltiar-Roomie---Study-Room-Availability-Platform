<?php
include 'db_connect.php';

$sql = "SELECT room_name, availability FROM rooms"; // Adjust table and column names as per your database
$result = $conn->query($sql);

$availability = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $availability[$row["room_name"]] = $row["availability"];
    }
    echo json_encode($availability);
} else {
    echo "0 results";
}
$conn->close();
?>
