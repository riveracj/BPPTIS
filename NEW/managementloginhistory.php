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
        $usertype = $_POST['username'];
         $sql = "INSERT INTO staffdailylogin (usertype) VALUES ('staff')";
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

 header('location:dashboard.php');
?>
