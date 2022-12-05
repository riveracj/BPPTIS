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
?>