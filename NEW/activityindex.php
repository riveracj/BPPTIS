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
        $logdate = $_POST['logdate'];
        $usertype = $_POST['usertype'];
        $username = $_POST['firstname'],$_POST['lastname'];
        $logintime = $_POST['logintime'];
        $logouttime = $_POST['logouttime'];
        

        $sql = "INSERT INTO staffdailylogin (logdate, usertype, username, logintime, logouttime) VALUES ('$logdate', '$usertype', '$username', '$logintime', '$logouttime')";
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
