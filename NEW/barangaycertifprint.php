<?php
include_once 'conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"SELECT residents set firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM residents  WHERE id='" . $_GET['id'] . "'");
$items= mysqli_fetch_array($result);
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
  </head>
  <style>
    @media print{
      @page
{
  size:A4;
  margin: 0;
}
#print-btn
{
  display: none;
  visibility: visible;
}
    }

.certif{
  padding: 4.8%;
margin-top:10px;
width: 750px;
}
  </style>
  </form>
     <form id="print-btn" >
      <button formaction="certificates.php">
    <i class="fas fa-arrow-left">back</i>
  </button>
<button type="button" value="Print" onClick="window.print()">Print</button>
</form>

  <form class="pr">

<form class="report-form">
  <div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class="certif">
  <header style="text-align:center;">
    Republic of the Philippines<br>
    Province of South Cotabato<br>
   Municipality of Polomolok<br>
    Barangay Pagalungan
    <br>
    <br>
   
    <label>
      <p>OFFICE OF THE PUNONG BARANGAY</p>
      <hr>
    <label>
      <br>
      <b>
      BARANGAY INDIGENCY
    </b>,
    </label>
    <br>
    <br>
</label>
</header>
    <label style="float: left;">
      <b>
      TO WHOME IT MAY CONCERN:</b>
    </label>
    <br>
<br>
    <div>
      <p><label style="margin-left: 70px;">
            This is to certify that Mr./Mrs. Ms <label style="border-bottom: 1px solid;"> <?php echo $items['firstname'];?> <?php echo $items['lastname'];?> ,</label>
             <label style="border-bottom: 1px solid;"> <?php echo $items['age'];?> </label> years old, is a resident of Purok <label style="border-bottom: 1px solid;"> <?php echo $items['address'];?></label>, Complete Address, and that as of
            this date the aforementioned person has no record in this office contratry to good moral character and intergrity and that he/she is know to be a peace loving and law abiding citizen.
</label>
</p>
<br>
<p>
  <br>
<label style="margin-left:70px">
  This certification is being issued upon the request of the above-name person for whatever legal purpose it may serve best.
</label>
          
        </p>
        <br>
         <p>
          <label style="margin-left: 70px;">
            
          ISSUED  this <label style="border-bottom: 1px solid;"><?php echo date("d");?>/<?php echo date("m"); ?>/2022</label>, 
          at  Barangay  Pagalungan,  Polomolok  City  South  Cotabato.
          </label>
        </p>

  </label>
  <br>
  <br>
  <br>
         <div>
           <label style="float:right;"><b>HON. MELCHOR J. GUAMEN</b><br>barangay captain
           </label> 
         </div>

      <div>         <br>
            <br>

          <label style="float:left;">
           
            Place of issue: Pagalungan, Polomolok South Cotabato
            <br>
            Date of issue: <label><?php echo date("d");?>/<?php echo date("m");?>/<?php echo date("y");?></label>
            <br>
            Amount: 20.00
                   </label>
  
      </div>
    </div>
      
    </label>

</header>
</div>
  </form>

  </body>
</html>