
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
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
   padding-top: 100px;
}
#dv{
  margin-left: 240px;
  margin-top: 215px;
  width: 1125px;
  position: fixed;
  height: 390px;
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
  margin-top: 233px;
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
  background-color: #f44336;
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
#input-field{
margin-left: 1010px;
  margin-top: 233px;
  width: 215px;
  position: fixed;
  border: solid 1px #4CAF50;
  padding:5px;
}
#search{
  margin-left: 1238px;
  margin-top: 233px;
  width: 110px;
  position: fixed;
  border: solid 1px #4CAF50;
  padding:5px;
   box-shadow: 0 0 6px rgba(0,0,0,0.3);
}
</style>
  </form> 
        <form type="button" method="GET">
    <input id="input-field" type="text" name="search" required value="<?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search constituents">
    
  </form>
  <form action="residentreport1.php">
      
  <button id="search" style="background:  #A9A9A9 ;" class="btn btn-primary" >
      Back <i class="fas fa-arrow-right" style="margin-left:10px;"></i>
      
        </button>
  </form>
    <form >
  <form>    
<div class="header1" id="myHeader">
  <h2>Barangay Pagalungan Portfolio and Tracking Information System</h2>
</div>
  </head>
  <body>
      <div class="sidebar">
      <header>Administrator</header>
      <a href="dashboard.php" >
      <i class="fas fa-chart-line-down"></i>
        <span>Dashboard</span>
      </a>
        
        <a href="resident.php"  >
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
      <a href="certificates.php">
        <i class="fas fa-sliders-h"></i>
        <span>Certificates</span>
      </a>
      <a href="managementlogin.php">
        <i class="fas fa-arrow-left"></i>
        <span>Exit</span>
      </a>
    </div>
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
 $query = "SELECT * FROM residents WHERE CONCAT(id,lastname,firstname,address,gender,status,nationality) LIKE '%$filtervalues%' ";
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
<td style="text-align:center;"><a href="residentreport.php?id=<?php echo $items["id"]; ?>" class="btn2">
  <i class='fas fa-pen-alt'>report</i>
</a></td>
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
</div>
  </section>
</form>
</div>
</form>
</body>
</html>