<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "bpptis";

// Create connection
$conn = new mysqli("localhost", "root","","bpptis");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE residents SET lastname='lastname' WHERE id='id'";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}
header('resident.php')
$conn->close();
?>

