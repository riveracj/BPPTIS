<?php
$conn = new mysqli("localhost", "root","","examplename");

if ($conn->connect_error) {
	// code...
	die("Connection connect_error" .  $conn->connect_error);
}
	 		$login["success"] = true;
            $login["error"] = false;
            $login["message"] ="";
	$_POST['id'] = true;
if (isset($_POST['id'])) {
	// code...
	$name = $_POST['name'];
	$address = $_POST['address'];
	$age = $_POST['age'];

	$sql = "INSERT INTO user (name, address, age) VALUES ('$name','$address','$age')";
$result = mysqli_query($conn, $sql);
     if($result){
            $login["success"] = true;
            $login["error"] = false;
            $login["message"] ="Data inserted successfully";

        }
        else{
            $login["success"] = false;
            $login["error"] = true;
            $login["message"] ="Error in inserting data";
        }

    }
    else{
        $login["success"] = false;
        $login["error"] = true;
        $login["message"] ="No parameters detected!";
    }
 header('location:examplesuccess.php');
?>
