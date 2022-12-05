
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="residentformadd.css" >
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous">
      
    </script>
<div class="header1" >
  <h2>Barangay Pagalungan Portfolio and Tracking Information System</h2>
<i class="fas fa-back"></i>
</div>
  </head>
  <body>
    <div class="sidebar">
      <header>Administrator</header>
      <a href="dashboard.php" >
      <i class="fas fa-chart-line-down"></i>
        <span>Dashboard</span>
      </a>
        
        <a href="resident.php" class="active" >
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

  <tbody>
   
<form method="post" action="residentformupdateindex.php">
  <div><?php if(isset($message)) { echo $message; } ?>
</div>
  <div class="container" style="overflow: scroll;" id="divv" >
    <h1 style=" color:#04AA6D ;">Register</h1>
    <br>
    <p>Please fill in this form.</p>
    <hr>
    <label for="lastname"><b>Lastname</b></label>
    <br>
    <input type="text" placeholder="Enter Lastname" name="lastname"  id="lastname" value="<?php echo $row['lastname']; ?>" >
	<br>


    <label for="firstname"><b>Firstname</b></label>
    <br>
    <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" value="<?php echo $row['firstname']; ?>">
    <br>


    <label for="address"><b>Address</b></label>
    <br>
    <input type="text" placeholder="Enter Address" name="address" id="address" value="<?php echo $row['address']; ?>">
    <br>

    <label for="age"><b>Age</b></label>
    <br>
    <input type="text" placeholder="Enter Age" name="age" id="age" value="<?php echo $row['age']; ?>">
    <br>


    <label for="gender"><b>Select Gender</b> <br></label>

	<input type="radio" name="gender" value="male" checked> Male 
 	 <input type="radio" name="gender" value="female"> Female<br>
   <br>
    <label for="tatus"><b>Civil Status</b></label><br>
<input list="browsers" name="status" style="width: 100px;">
<datalist id="browsers">
  <option name="status" value="Single">
  <option name="status" value="Married">
</datalist>
<br>
<br>
    <label for="nationality"><b>Nationality</b></label>
    <br>
    <input type="text" placeholder="Enter Nationality" name="nationality" id="nationality" required>
    <br>
    <br>
    <button type="submit" class="registerbtn" >Update</button>
  </div>
</form>
</tbody>


</body>
</html>