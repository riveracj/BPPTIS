<?php
$password = $_POST['password'];

$conn = new mysqli("localhost", "root","","bpptis");

if ($conn->connect_error) {

	die("failed to connect:"^$conn->connect_error);

	// code...
} 
else {
	$stmt = $conn->prepare("select * from staffmanagement where password = ?");
	$stmt->bind_param("s", $password);
	$stmt->execute();
	$stmt_result = $stmt->get_result();
		if ($stmt_result->num_rows > 0) {
			$data = $stmt_result->fetch_assoc();
			if ($data['password'] === $password) {
				header('location:managementloginhistory.php');
			} else {
				die("failed to connect:"^$conn->connect_error);
			}
			
		} else {
			
 header('location:managementloginhistory.php');		}
		
}
?>
