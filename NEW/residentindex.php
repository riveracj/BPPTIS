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

        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $address = $_POST['address'];
        $age = $_POST['age'];
        $religion = $_POST['religion'];
 
        $city = $_POST['city'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];
        $status = $_POST['status'];
        $contactnumber = $_POST['contactnumber'];

        $middlename = $_POST['middlename']; 
        $nationality = $_POST['nationality'];
     
 
        $sql = "INSERT INTO residents (lastname, firstname, middlename, birthdate, contactnumber, religion, city, household, address,  age, gender, status,  nationality) 
                VALUES( '$lastname', '$firstname' ,'$middlename', '$birthdate', '$contactnumber', '$religion', '$city','$household', '$address', '$age', '$gender','$status',  '$nationality')";
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
