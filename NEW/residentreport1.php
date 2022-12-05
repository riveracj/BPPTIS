
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Maligaya 1'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output1 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>

 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Maligaya 2'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output2 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Masagana 1'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output3 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Masagana 2'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output4 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Mainuswagon'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output5 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Luwalhati'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output6 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Magalong'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output7 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>

 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. Masikap'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output8 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");
$sql = "SELECT COUNT(*) as count FROM residents WHERE address='Prk. pagkakaisa'";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output9 = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous">
      
    </script>
<div class="header1" id="myHeader">
  <h2 style="">Barangay Pagalungan Portfolio and Tracking Information System</h2>
</div>
  </head>
  <style>
.certif{
  padding-top: 8px;
margin-left:280px;
margin-top: 20px;
width: 1050px;
 box-shadow: 0 0 6px rgba(0,0,0,0.5);
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 100px;
   position: absolute;
}
#dv{
  margin-left: 240px;
  margin-top: 198px;
  width: 1125px;
  position: fixed;
  height: 110px;
  overflow: auto;
}
#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 6.8px;
margin-top: 250px;
font-size: 12px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
  width: 100px;
  padding-top: 10px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


#resident {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 100px;
}
#purok{
  margin-left: 240px;
  margin-top: 345px;
  width: 550px;
  position: fixed;
  height: 220px;
  overflow: auto;
}
#resident td, #resident th {
  border: 1px solid #ddd;
  padding: 6.8px;
margin-top: 250px;
font-size: 12px;
}
#resident tr:nth-child(even){background-color: #f2f2f2;}
#resident tr:hover {background-color: #ddd;}
#resident th {
  width: 100px;
  padding-top: 10px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
}


  </style>
  <body>

    	<form>
    <div class="sidebar">
      <header>Administrator</header>
      <a href="dashboard.php" >
      <i class="fas fa-chart-line-down"></i>
        <span>Dashboard</span>
      </a>
        
        <a href="resident.php" >
        <i class="fas fa-home"></i>
        <span >Resident</span>
      </a>
    
      <a href="residentreport1.php" class="active">
         <i class="fas fa-calendar"></i>
        <span>Report</span>
      </a>
      <a href="activity.php">
        <i class="fas fa-file"></i>
        <span>Activity</span>
      </a>
      <a href="Certificates.php">
        <i class="fas fa-sliders-h"></i>
        <span>Certificates</span>
      </a>
        <a href="managementlogin.php">
        <i class="fas fa-arrow-left"></i>
        <span>Exit</span>
      </a>
    </div>
  </form>
   <form >
<div id="dv"><b style="margin-left:20px;">Total of resident</b>
<table id="customers">
<tr>
    <th>
      Prk. Maligaya 1
    </th>
    <th>
      Prk. Maligaya 2
    </th>
    <th>
      Prk. Masagana 1 
    </th>
    <th>
      Prk. Masagana 2
    </th>
    <th>Prk. Mainuswagon
    </th>
    <th>Prk. Luwalhati
    </th>
    <th>Prk. Magalong
    </th>
    <th>Prk. Masikap
    </th>
    <th>Prk. pagkakaisa
    </th>
</tr>
<tbody>
<tr>
  <td><?php
        echo $output1;
      ?> </button></td>

  <td><?php
        echo $output2;
      ?> </button></td>

  <td><?php
        echo $output3;
      ?> </button></td>

  <td><?php
        echo $output4;
      ?> </button></td>

  <td><?php
        echo $output5;
      ?> </button></td>

  <td><?php
        echo $output6;
      ?> </button></td>

  <td><?php
        echo $output7;
      ?> </button></td>

  <td><?php
        echo $output8;
      ?> </button></td>
  <td><?php
        echo $output9;
      ?> </button></td>
</tr>
      </tbody>
  </table>
 </div>
 <div id="purok">
<form action="GET" type="button">
   <input type="text" name="search" required  class="form-control" placeholder="Search Prk..." style="padding: 5px;">
   <button type="submit" style="border:none; padding: 5px;background-color:#4CAF50 ; color: white;">check</button>
 </form>
   <table id="resident">
   </form>

     <tr>
       <th>Constituent's Names Listed</th>
     </tr>
     <tbody>
       
  <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

 if(isset($_GET['search']))
{
 $filtervalues = $_GET['search'];
 $query = "SELECT * FROM residents WHERE CONCAT(address) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
<tr>
<td id="n"><?= $items['firstname']; ?>, <?= $items['lastname']; ?> <?= $items['middlename'];?></td>
     
  <?php
                                            }
                                        }
                                        else
                                        {
                                            ?>
                                                <tr>
                                                    <td >No Record Found</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                ?>
     </tbody>
   </table>
 </div>
</form>
  </body>
</html>