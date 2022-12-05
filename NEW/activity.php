
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
  <h2>Barangay Pagalungan Portfolio and Tracking Information System</h2>
</div>
  </head>
<style >
  
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 100px;
}
#dv{
  margin-left: 240px;
  margin-top:40px;
  width: 510px;
  position: fixed;
  height: 200px;
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

.certif{
  padding-top: 8px;
margin-left:280px;
margin-top: 20px;
width: 1050px;
 box-shadow: 0 0 6px rgba(0,0,0,0.5);
}

#cus {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 100px;
}
#divv{
  margin-left: 240px;
  margin-top:290px;
  width: 600px;
  position: fixed;
  height: 200px ;
  overflow: auto;
}
#cus td, #cus th {
  border: 1px solid #ddd;
  padding: 6.8px;
margin-top: 250px;
font-size: 12px;
}
#cus tr:nth-child(even){background-color: #f2f2f2;}
#cus tr:hover {background-color: #ddd;}
#cus th {
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
      <a href="dashboard.php">
      <i class="fas fa-chart-line-down"></i>
        <span>Dashboard</span>
      </a>
        
        <a href="resident.php" >
        <i class="fas fa-home"></i>
        <span >Resident</span>
      </a>
      
    
      <a href="residentreport1.php" >
         <i class="fas fa-calendar"></i>
        <span>Report</span>
      </a>
      <a href="activity.php"class="active" >
        <i class="fas fa-file"></i>
        <span>Activity</span>
      </a>
      <a href="certificates.php" >
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
      <section>
<div id="divv">
<table id="cus">
<tr>
 
  <th>Name</th>
    <th>Address</th>
 <th>Date_added</th>
</tr>
<tbody>
  <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

if ($conn->connect_error) {

  die("failed to connect:"^$conn->connect_error);

  // code...
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);


if (!$result) {
   die("failed to connect:" . $conn->connect_error);
  // code...
}
while ($row = $result->fetch_assoc()) {

  // code...
     echo "<tr>
    <td>" . $row["firstname"] . ", " . $row["firstname"] . " " . $row["middlename"] . "</td>
    <td>" . $row["address"] . "</td>
    <td>" . $row["reg_date"] . "</td>
</tr>";
}
?>
</tbody>

  </table>
</div>


 </section>
</form>

<label style="position:fixed;margin-left: 280px;
padding-top: 10px;">
  <b>
    User's Log
  </b>
</label>
<label style="position:fixed;margin-left: 280px;
padding-top: 260px;">
  <b>
    Recent Respondents Added
  </b>
</label>
<form method="post">
<section>
<div id="dv">
<table id="customers">
<tr>

  <th>Log date</th>
    <th>User Type</th>
    <th>LOGIN</th>
</tr>
<tbody>
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

if ($conn->connect_error) {

  die("failed to connect:"^$conn->connect_error);

  // code...
}
$sql = "SELECT * FROM staffdailylogin";
$result = $conn->query($sql);


if (!$result) {
   die("failed to connect:" . $conn->connect_error);
  // code...
}
while ($row = $result->fetch_assoc()) {

  // code...
     echo "<tr>
    <td>" . $row["logdate"] . "</td>
    <td>" . $row["usertype"] . "</td>
    <td>" . $row["logintime"] . "</td>
</tr>";
}
?></tbody>
  </table>
</div>
  </section>
</form>
  </body>
</html>
