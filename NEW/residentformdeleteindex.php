<?php
    include'conn.php';
    $delete["success"] = false;
    $delete["error"] = false;
    $delete["message"] ="";

    //$_POST['id'] = true;
    if(isset($_POST['id'])){

        $id = $_POST['id'];
        $sql = "DELETE FROM residents WHERE id='$id'";
       $result = mysqli_query($conn, $sql);
        if($result){
            $delete["success"] = true;
            $delete["error"] = false;
            $delete["message"] ="Data inserted successfully";

        }
        else{
            $delete["success"] = false;
            $delete["error"] = true;
            $logdeletein["message"] ="Error in inserting data";
        }



    }
    else{
        $delete["success"] = false;
        $delete["error"] = true;
        $delete["message"] ="No parameters detected!";
    }
 header('location:resident.php');
?>
