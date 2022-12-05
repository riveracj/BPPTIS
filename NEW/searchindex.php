<?php

$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "bpptis";
if(isset($_GET['search']))
{
 $filtervalues = $_GET['search'];
 $query = "SELECT * FROM residents WHERE CONCAT(id,lastname,firstname,address,age,gender,status,nationality) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                               
}
header('location:residents.php');
?>