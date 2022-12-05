?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

if ($result->num_items > 0) {
    // output data of each row
    while($items = $result->fetch_assoc()) {
        echo "<br> ". $items["id"]. " - Name: ". $items["firstname"]. " " . $items["lastname"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
