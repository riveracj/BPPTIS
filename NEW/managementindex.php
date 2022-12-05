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
    $login["success"] = false;
    $login["error"] = false;
    $login["message"] ="";

    $_POST['id'] = true;
    if(isset($_POST['id'])){
        $name = $_POST['name'];
        $position = $_POST['position'];
        $password = $_POST['password'];
        $age = $_POST['age'];
        $address = $_POST['address'];
        $number = $_POST['number'];

        $sql = "INSERT INTO staffmanagement (name, position, password, age, address, num) VALUES ('$name', 'staff', '$password', '$age', '$address','$number')";
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

 header('location:managementloginhistory.php');
?>
