<?php
include_once 'resindex.php';
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
  cursor: pointer;
  opacity: 0.9;
}
#addresident:hover{
  opacity: 1;
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
margin-left: 980px;
  margin-top: 186px;
  width: 215px;
  position: fixed;
  border: solid 1px #4CAF50;
  padding:5px;
}


.open-button{
  margin-left: 20%;
  padding: 5px;
  background: #4CAF50;
  color: white;
   border: none;
   cursor: pointer;
}

.form-popup {
    display: none;
    left: 25%;
    top: 10%;
    position: fixed;
    border: 3px solid #f1f1f1;
    z-index: 9;
    background-color: white;
    padding: 10px;
    width: 60%;
    height: 85%;
    position: fixed;

}

/* Add styles to the form container */
.form-container {
  max-width: 300px;
  padding: 10px;
  background-color: white;
}


/* Add some hover effects to buttons */
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
.form-container .btn:hover, .open-button1:hover {
  opacity: 1;
}
</style>
  </form> 
  <form type="button" action="residentformadd.php">
    <div class="list">

    <button id="addresident" style="background: white ;" type="submit" >
          Add Constituent
        </button>
        </div>
  </form> 
  <form>
        
<div class="header1" id="myHeader">
  <h2>Barangay Pagalungan Portfolio and Tracking Information System</h2>

</div>
  </head>
  <body>

      <form class="body" >
          <div><?php if(isset($message)) { echo $message; } ?>
</div>
</div>
</form>
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
  </form>

    <form >
       <form type="button" method="GET">
    <input id="input-field" type="text" name="search" required class="form-control" placeholder="Search constituents...">
  </form>
 <section>
<div id="dv" >
<table id="customers" style="text-align:center;">
<tr>
  <th>Full Name</th>
    <th>Address</th>
    <th>Age</th>
    <th>Gender</th>
    <th >View-profile</th>
</tr>

<tbody>

  <?php
  $password = "password";

$conn = new mysqli("localhost", "root","","bpptis");

 if(isset($_GET['search']))
{
 $filtervalues = $_GET['search'];
 $query = "SELECT * FROM residents WHERE CONCAT(lastname,firstname,address,age, gender) LIKE '%$filtervalues%' ";
$query_run = mysqli_query($conn, $query);

                                        if(mysqli_num_rows($query_run) > 0)
                                        {
                                            foreach($query_run as $items)
                                            {
                                                ?>
<tr>
<td id="n"><?= $items['firstname']; ?>, <?= $items['lastname']; ?> <? = $items['middlename'];?>.</td>
<td><?= $items['address']; ?></td>
<td><?= $items['age']; ?></td>
<td><?= $items['gender']; ?></td>
<td>
  <a href="residentprofileshow.php?id=<?php echo $items["id"]; ?>" id="btn-copy" type="submit" class="open-button" ><i class="fas fa-user"></i> profile</a>
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
</div>

  </section>
</form>
</div>

</form>

<script>


</script>


</body>
</html>
