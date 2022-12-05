 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

$sql = "SELECT COUNT(*) as count FROM residents ";
$result = $conn->query($sql);

while ($row = $result->fetch_assoc()) 
{
  $output = $row['count'];
}
$sql = "SELECT * FROM residents";
$result = $conn->query($sql);

?>
<?php
session_start();
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
    #dboard{
background: linear-gradient(to bottom, #ff0066 0%, #ccff99 100%);
  width: 215px;
  padding: 25px;
  height: 150px;
  position: fixed;
  margin-top: 150px;
  margin-bottom: 100px;
  margin-right: 160px;
  margin-left: 450px;
  box-shadow: 0 0 8px rgba(0,0,0,0.6);
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
}
.b{
  margin-top: 120px;
  padding: 5px;
background: linear-gradient(to bottom, #ff0066 10%, #ccff99 70%);
border: none;
  text-decoration-color: white;
  display: inline-block;
  box-shadow:0 0 7px rgba(0,0,0,0.5) ;
   cursor: pointer;
}


.b:hover{
opacity: 0.5;
}
 #dboard2{
  background: linear-gradient(to bottom, #003399 0%, #ff3399 100%);
  width: 215px;
  padding: 25px;
  height: 150px;
  position: fixed;
  margin-top: 150px;
  margin-bottom: 100px;
  margin-right: 160px;
  margin-left: 750px;
  box-shadow: 0 0 8px rgba(0,0,0,0.6);
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
}

.count{
margin-top: 60px;
margin-left: 18%;
text-align: center;
padding: 5px;
text-transform: lowercase;
width: 120px;
box-shadow:0 0 7px rgba(0,0,0,0.5) ;

}
.count:hover{
  opacity: 0.7;
}
.count1:hover{
  opacity: 0.7;
}
#dboard3{
  background: linear-gradient(to bottom, #003399 0%, #ff3399 100%);
  width: 215px;
  padding: 25px;
  height: 150px;
  position: fixed;
  margin-top: 10px;
  margin-bottom: 100px;
  margin-right: 160px;
  margin-left: 810px;
  box-shadow: 0 0 8px rgba(0,0,0,0.6);
  text-transform: uppercase;
  font-family: 'Open Sans', sans-serif;
}

.count{
  background: linear-gradient(to bottom, #003399 0%, #ff3399 100%);
margin-top: 80px;
margin-left: 18%;
text-align: center;
padding: 5px;
text-transform: lowercase;
width: 120px;
box-shadow:0 0 7px rgba(0,0,0,0.5) ;
border: none;
color: white;
 cursor: pointer;"
}

.count1{
  background: linear-gradient(to bottom, #003399 0%, #ff3399 100%);
margin-top: 60px;
margin-left: 18%;
text-align: center;
padding: 5px;
text-transform: lowercase;
width: 120px;
box-shadow:0 0 7px rgba(0,0,0,0.5) ;
border: none;
color: white;
 cursor: pointer;"
}
  </style>
  <body>
      <form>
        <div class="db">
           <div id="dboard" style="color:  white;">
      <h4 style="border-bottom: 0.5px solid wheat; text-align: center;">Barangay's Officials</h4>
      <button class="b" formaction="Officials.php"><p>See officials</p></button>
    </div>

         <div id="dboard2" style="color: white;" >
      <p style=" border-bottom: 0.5px solid wheat; text-align: center;">Total of Residents
        </p>
        <button formaction="resident.php" class="count">

      <?php
        echo $output;
      ?> Contituents
</div>
    

        
    </div>
  </form>
        
    </div>
  </form>
    	<form>
    <div class="sidebar">
      <header>Administrator</header>
      <a href="dashboard.php" class="active">
      <i class="fas fa-chart-line-down"></i>
        <span>Dashboard</span>
      </a>
        
        <a href="resident.php" >
        <i class="fas fa-home"></i>
        <span >Resident</span>
      </a>
    
      <a href="residentreport1.php">
         <i class="fas fa-calendar"></i>
        <span>Report</span>
      </a>
      <a href="activity.php">
        <i class="fas fa-file"></i>
        <span>Activity</span>
      </a>
      <a href="certificates.php">
        <i class="fas fa-sliders-h"></i>
        <span>Certificates</span>
      </a>
      <a href="managementlogin.php">
        <i class="fas fa-arrow-left"></i>
        <span>Exit</span>
      </a>
    </div>
  </form>
  </body>
</html>