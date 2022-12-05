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
        $id=$_POST['$id'];
        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $nationality = $_POST['nationality'];
        
        $sql = "UPDATE residents SET , lastname='" . $_POST['lastname'] . "', firstname='" . $_POST['firstname'] . "', address='" . $_POST['adress'] . "' ,age='" . $_POST['age'] . "' , gender='" . $_POST['gender'] . "', status='" . $_POST['status'] . "' , nationality='" . $_POST['nationality'] . "', Report_records='" . $_POST['Report_records'] . "' WHERE id='" . $_GET['id'] . "'";
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

 header('location:resident.php');
?>