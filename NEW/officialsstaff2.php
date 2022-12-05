
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
  font-size: 15px;
}
.staff{
  width: 100px;
  margin-top: 160px;
  margin-bottom:50px;
  margin-left: 280px;
  padding: 15px;
  background: linear-gradient(to bottom, #66ffff 0%, #ff66ff 100%);
  border: 1px solid;
  position: fixed;
  box-shadow:0 0 6px rgba(0,0,0,0.2) ;
  cursor: pointer;
}
.staff: hover{
opacity: 2;
}
.staff2{
  width: 100px;
  margin-top: 160px;
  margin-bottom:50px;
  margin-left: 390px;
  border: none;
  padding: 15px;
  background: linear-gradient(to bottom, #66ffff 0%, #ff66ff 100%);
  position: fixed;
  box-shadow:0 0 6px rgba(0,0,0,0.2) ;
  cursor: pointer;
}
.staff2: hover{
opacity: 2;
}
  </style>
  <body>
  <form>
    
         <div>
  <button class="staff" formaction="Officials.php"><p>staff</p></button>
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
   <p style="font-family: Impact, Charcoal, sans-serif">Official Detials</p>
    <hr>
        <div >
        <b style="margin-left: 10%; color: tomato;">Brgy. Secretary</b>
        <br>
        <b style="margin-left: 3px;">HON. JUDY ANN D. PIAMONTE</b>
        <br>
  <b style="margin-left: 5px;">MRS. JULIA B. VILLAFLOR</b>
        <br>
        <br>
         <b style="margin-left: 10%; color: tomato;">Brgy. Treasurer</b>
        <br>
        <b style="margin-left: 5px;">MRS. TERRY S. VILLARAZA</b>
        <br>
      <br>
      <b style="margin-left:3.5%;color: tomato; position: fixed;">BGY. KAGAWAD</b>
      <div style="margin-left:20%;">
        <br>
        <ol style=" list-style-type: number;">
          <li>
        <b>HON. LYDIA A. HERRERA</b>           
          </li>
        <li>
        <b>HON. LENARD S. MONARES</b></li>
        <li>
        <b>HON. FLORENCIO P. JURIDICO</b></li>
        <li>
        <b>HON. MYRNA M. AGUSTIN</b>
        </li>
        <li>
        <b>HON. DEXTER J PIAMONTER</b>
        <li>
        <b>HON. ALEXANDER R. ESCOLANO</b>
        </li>
        <li>        
        <b>ANNABE A. TANDOG</b>
        </li>
        </ol>
        </div>
      </div>
        </div>


  </body>
</html>