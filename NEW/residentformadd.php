<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="dashboard.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous">
      
    </script>
<div class="header" >
  <h2>Barangay Pagalungan Portfolio and Tracking Information System</h2>
</div>
  </head>
  <style type="text/css">
     
*{
  margin: 0;
  padding: 0;
  text-decoration: none;
}
.header {
  background: #4CAF50;
  color: #f1f1f1;
  padding: 10px 16px;
}

/* Add padding to containers */
.container {
    font-family: Arial, Helvetica, sans-serif;
  margin-left: 290px;
  padding: 16px;
  background-color: white;
  width: 60%;
  position: fixed;
  height: 100%;
  overflow: visible;
}

/* Full-width input fields */
input[type=text], input[type=password] {

  padding: 5px;
  margin: 5px 0 10px 0;
 
    border-width: 1px;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
}

/* Overwrite default styles of hr */
hr {
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 10px 10px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 20%;
  opacity: 0.9;
  margin-left: 10px;
}

.registerbtn:hover {
opacity: 1;
}
.btn-res:hover {
opacity: 1;
}
.btn-res{
  border:none;
  padding: 10px; 
  background: tomato;
  cursor: pointer;
  opacity: 0.9;
  margin-left: 10px;

}
#ad{
  cursor: pointer;
}
/* Add a blue text color to links */
a {
  color: dodgerblue;
}
#ad{
  padding: 5px;
}

label {

font-size: 12px;
}
 
 #brow{
  cursor: pointer;
 }

  </style>
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
        <span>Reports</span>
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
<form method="post" action="residentindex.php">
  <div class="container" id="divv" >
    <h1 style=" color:#04AA6D ;">Register</h1>
    <br>
     <fieldset style="padding: 15px;height: 400px;">
 <legend style="color: darkcyan;">Please fill in this form for Personal information:</legend>
    <br>
    <label for="lastname"><b>Lastname:</b></label>
    <input type="text" placeholder="Enter Lastname" name="lastname"  id="lastname" required style="  margin-left: 5px;" >
    <label for="firstname" style="margin-left:10px;"><b>Firstname:</b></label>
    <input type="text" placeholder="Enter Firstname" name="firstname" id="firstname" required>
    <label for="mi"style="margin-left:10px;"><b>MI.:</b></label>
    <input type="text" placeholder="Enter MI."name="middlename" id="mi" required style="width: 60px;">
    <label for="age"style="margin-left:10px;"><b>Age:</b></label>
    <input type="text" name="age" id="age" required style="width: 40px;">
<br>
<br>
<label for="birthdate"  ><b>Birthdate:</b></label>
    <input type="text" placeholder="mm-dd-yy" name="birthdate"  id="birthdate" required style="  margin-left: 8px;" >
    <label for="religion" style="margin-left:10px;"><b>Religion:</b></label>
    <input type="text" placeholder="Enter Religion" name="religion" id="religion" required style="margin-left:10px;">
        <label for="address" style="margin-left:10px;"><b>Purok:</b></label>
  <select id="ad" name="address" style="margin-left: 10px;">
    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Maligaya 1

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Maligaya 2

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Masagana 1 

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Masagana 2

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Mainuswagon

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Luwalhati

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Magalong

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Masikap

    <option type="radio" placeholder="Enter Address" name="address" id="address" required>Prk. Pagkakaisa
</select>

  <br>
  <br>
  <label for="contactnum" ><b>Contact Number:</b></label>
    <input style="margin-left:10px;"type="text" placeholder="Enter Number 09....." name="contactnumber" id="contactnum" required>

<label for="city" style="margin-left:5px;"><b>City of:</b></labe l>
<input style="margin-left:5px;" type="text" name="city" value="Polomolok"checked >
<label for="household" style="margin-left:10px;"><b>Households:</b></label>
<select id="household" style="margin-left:10px;" name="household">
  <option type="radio" name="household" id="household" required>2
  <option type="radio" name="household" id="household" required>3
  <option type="radio" name="household" id="household" required>4
  <option type="radio" name="household" id="household" required>5
  <option type="radio" name="household" id="household" required>6
  <option type="radio" name="household" id="household" required>7
  <option type="radio" name="household" id="household" required>8
  <option type="radio" name="household" id="household" required>9
  <option type="radio" name="household" id="household" required>10
  <option type="radio" name="household" id="household" required>11
  <option type="radio" name="household" id="household" required>12
  <option type="radio" name="household" id="household" required>13
  <option type="radio" name="household" id="household" required>14
  <option type="radio" name="household" id="household" required>15
</select>
 <br>
 <br>
    <label for="nationality"style="margin-left:38px"><b>Nationality:</b></label>
    <input type="text" placeholder="Enter Nationality" name="nationality" id="nationality" value="Pilipino" required>
    <br>
    <br>
 <label for="tatus" style="margin-left:38px;"><b>Marital Status:</b></label>
<select id="brow" name="status">
  <option name="status" value="Single">Single
  <option name="status" value="Married">Married
  <option name="status" value="Widow">Widow
     <option name="status" value="Devorced">Devorced
  <option name="status" value="Separated">Separated
</select>
<br>
<br>
    <label style="margin-left:38px;" for="gender"><b>Select Gender:</b> </label>
    <br>
      <input style="margin-left:38px;" type="radio" name="gender" value="male" > Male <br>
   <input style="margin-left:38px;"type="radio" name="gender" value="female" > Female
   <br>
       </fieldset>
     <br>
     <div>
      <input type="reset" class="btn-res" onclick="alert('Wanna Clear Form?')">
    <button type="submit" class="registerbtn" >Register</button>
</div>  </div>

</form>
</tbody></body>
</html>
