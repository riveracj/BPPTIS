
 <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

$sql = "SELECT * FROM staffmanagement";
$result = $conn->query($sql);

 while ($row = $result->fetch_assoc()) 
{
  $position = $row['position'];
  $name = $row['name'];
  $address = $row['address'];
  $age = $row['age'];
  $number = $row['num'];
}
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
  <h2>Barangay Pagalungan Portfolio and Tracking Information System</h2>

</div>
  </head>
  <style>

.contenttable{
  margin-right: 50%;
  margin-left: 280px;
  margin-top: 231px;
  background: dimgrey;
  background: linear-gradient(to right, #ff9966 0%, #ff6666 100%);
  width: 250px;
  padding: 24px;
  height: 265px;
  position: fixed;
  
}

.contentprofile{
  margin-right: 50%;
  margin-left: 280px;
  margin-top: 230px;
  width: 500px;
  padding: 25px;
  padding-left: 310px ;
  height: 265px;
   box-shadow:0 0 7px rgba(0,0,0,0.3) ;

}
.staff{
  width: 100px;
  margin-top: 160px;
  margin-bottom:50px;
  margin-left: 280px;
  padding: 15px;
  background: linear-gradient(to bottom, #66ffff 0%, #ff66ff 100%);
  border: none;
  position: fixed;
  box-shadow:0 0 6px rgba(0,0,0,0.2) ;
}
.staff: hover{
opacity: 2;
}
.staff2{
  width: 100px;
  margin-top: 160px;
  margin-bottom:50px;
  margin-left: 390px;
  border: 1PX solid;
  padding: 15px;
  background: linear-gradient(to bottom, #66ffff 0%, #ff66ff 100%);
  position: fixed;
  box-shadow:0 0 6px rgba(0,0,0,0.2) ;
}
.staff2: hover{
opacity: 2;
}

  </style>
  <body>
  <form>
         <div>
  <button class="staff" formaction="Officials.php"><p>Staff</p></button>
</div>
         <div>
  <button class="staff2" formaction="Officialsstaff2.php"><p>Others</p></button>
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
    <form class="contenttable">    
  </form>
<div class="contentprofile">
   <p style="font-family: Impact, Charcoal, sans-serif; font-size:30px;"><?php echo $position; ?></p>
    <hr>
    <br>
    <br>
    <label for="name"><b>Name:  <?php echo $name; ?></b></label><br><br>
    <label for="address"><b>Address:  <?php echo $address; ?></b></label><br><br>
    <label for="age"><b>Age:  <?php echo $age; ?></b></label><br><br>
    <label for="address"><b>Contact Number:  <?php echo $number; ?></b></label><br><br>
    
</div>
  </body>
</html>