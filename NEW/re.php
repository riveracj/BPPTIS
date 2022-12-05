<?php
include_once 'conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"SELECT residents set firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM residents  WHERE id='" . $_GET['id'] . "'");
$items= mysqli_fetch_array($result);
?>