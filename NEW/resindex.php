  <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

if ($conn->connect_error) {

  die("failed to connect:"^$conn->connect_error);

  // code...
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);


if (!$result) {
   die("failed to connect:" . $conn->connect_error);
  // code...
}
?>
