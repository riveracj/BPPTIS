
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
  div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-left: 550px;
  margin-top: 40px;
  padding: 15px;
  position: fixed;
  height: 190px;
}

div.gallery:hover {
  border: 1px solid #777;
}
div.gallery img {
  width: 100%;
  height: 70%;
}
div.desc {
  padding: 15px;
  text-align: center;
}


#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 100px;
}
#dv{
  margin-left: 240px;
  margin-top: 280px;
  width: 1125px;
  position: fixed;
  height: 327px;
  overflow: scroll;
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
#addresident{
margin-left: 1208px;
  margin-top: 50px;
  width: 155px;
  position: fixed;
  border: solid 1px #4CAF50;
  padding:5px;
}
.btn {
  background-color: #008CBA;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;

}
.btn2 {
  background-color: #008080;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;

}
.btn3 {
  background-color: #778899;
  border: none;
  color: white;
  padding: 5px 5px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  margin: 4px 2px;
  cursor: pointer;

}

div.gallery1 {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
  margin-left: 300px;
  margin-top: 40px;
  padding: 15px;
  height: 190px;
  position: fixed;
}

div.gallery1:hover {
  border: 1px solid #777;
}
div.gallery1 img {
  width: 100%;
  height: auto;
}
div.desc1 {
  padding: 15px;
  text-align: center;
}
#input-field{
margin-left: 82%;
  margin-top: 230px;
  width: 212px;
  position: fixed;
  border: solid 1px #4CAF50;
  padding:8px;
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
      <a href="activity.php">
        <i class="fas fa-file"></i>
        <span>Activity</span>
      </a>
      <a href="certificates.php" class="active"  >
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
 <form type="button" method="GET">
    <input id="input-field" type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search constituents">
    <p style="margin-top:17.5%;margin-left:75%;position: fixed;"><b>Search Here!</b></p>
  </form>
 <div class="gallery" >
    <img src="bc.png" alt="Cinque Terre" width="600" height="400" >
    <button style="margin-top: 5px;">
         <a class="desc" href="barangaycertifprint1.php">Barangay CERTIFICATION(BC)</a>
 
    </button>
</div>
   <div class="gallery1" >
    <img src="barangay certif.png" alt="Cinque Terre" width="600" height="400" >
  <div class="desc1">Barangay INDIGENCY(BI)</div>
</div>
</form>
      <section>
<div id="dv">
<table id="customers">
<tr>
    <th>Full Name</th>
    <th>Address</th>
    <th>Age</th>
    <th>Gender</th>
    <th>Status</th>
    <th>Nationality</th>
    <th>Request</th>
</tr>
<tbody>
  <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

 if(isset($_GET['search']))
{
 $filtervalues = $_GET['search'];
 $query = "SELECT * FROM residents WHERE CONCAT(lastname,firstname,address,age,gender,status,nationality) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
<tr>
<td><?= $items['firstname']; ?>, <?= $items['lastname']; ?></td>
<td><?= $items['address']; ?></td>
<td><?= $items['age']; ?></td>
<td><?= $items['gender']; ?></td>
<td><?= $items['status']; ?></td>
<td><?= $items['nationality']; ?></td>
  <td style="text-align:center;"> 
<a href="barangaycertifprint.php?id=<?php echo $items["id"]; ?>" class="btn2">
  <i class='fas fa-paste'>BI</i>
</a>
</td>
  </tr>
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

<script>
</script>

</div>
  </section>
  </body>
</html>