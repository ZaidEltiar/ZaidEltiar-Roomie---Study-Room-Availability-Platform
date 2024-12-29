<?php
include 'db_connect.php'; // Ensure this path is correct

$secret_key = 'newday'; // Replace with your actual secret key

// Check if the secret key is correct
if (isset($_GET['key']) && $_GET['key'] == $secret_key) {

    // SQL to truncate the table
    $truncateSql = "TRUNCATE TABLE rooms";

    // SQL to insert the new data
    $insertSql = "INSERT INTO rooms (room_name, availability) VALUES
    ('ECSW 2.125', 'Not Sure'),
    ('ECSW 2.160', 'Not Sure'),
    ('ECSW 2.330', 'Not Sure'),
    ('ECSW 2.369', 'Not Sure'),
    ('ECSW 3.125', 'Not Sure'),
    ('ECSW 3.160', 'Not Sure'),
    ('ECSW 3.330', 'Not Sure'),
    ('ECSW 4.125', 'Not Sure'),
    ('ECSW 4.160', 'Not Sure'),
    ('ECSW 4.330', 'Not Sure'),
    ('SCI B.128', 'Not Sure'),
    ('SCI B.176', 'Not Sure'),
    ('SCI 1.121', 'Not Sure'),
    ('SCI 1.176', 'Not Sure'),
    ('SCI 2.106', 'Not Sure'),
    ('SCI 2.146', 'Not Sure'),
    ('SCI 2.176', 'Not Sure'),
    ('SCI 3.110', 'Not Sure'),
    ('SCI 3.166', 'Not Sure'),
    ('SCI 3.176', 'Not Sure');";

    // Execute the truncate SQL
    if ($conn->query($truncateSql) === TRUE) {
        echo "Table rooms truncated successfully. ";
    } else {
        echo "Error truncating table: " . $conn->error;
    }

    // Execute the insert SQL
    if ($conn->query($insertSql) === TRUE) {
        echo "New records created successfully.";
    } else {
        echo "Error inserting new records: " . $conn->error;
    }

} else {
    echo "Unauthorized access";
}

$conn->close();
?>
