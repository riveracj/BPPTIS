<?php
include_once 'conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"SELECT residents set firstname='" . $_POST['firstname'] . "', lastname='" . $_POST['lastname'] . "', address='" . $_POST['address'] . "' WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
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
  </head>
  <style>
        @media print{
          @page
{
  size:A3;
  margin: 0;
}
.pr, .prt
{
  display: none;
  visibility: visible;
}
    }
    .customers {
    border-collapse: collapse;
    margin-top: 5px;
width: 100%;
}

    .customers td, .customers th {
  border: 1px solid black;
  padding: 6.8px;
margin-top: 250px;
font-size: 12px;

}
.certif{
  padding: 5px;
margin-top:10px;

}
.pr{
  position: fixed;
}

  </style>
    <form class="pr">
    <button formaction="certificates.php">
    <i class="fas fa-arrow-left">back</i>
  </button>
   <form class="prt" >
<input type="button" value="Print"  onClick="window.print()">
<form class="arrow">

 
</form>
</form>
<header style="text-align:center;">
    Republic of the Philippines<br>
    Province of<br>
    City of Polomolok<br>
    Barangay Pagalungan
    <br>
    <br>
   
    <label>
      <p>OFFICE OF THE PUNONG BARANGAY</p>
    
</label>
</header>
<body>
<form class="report-form">
  <div><?php if(isset($message)) { echo $message; } ?>
</div>
<div class="certif">
<table  style="border:1px solid;" class="customers">
<tbody>
  <tr>
    <td style="font-size: 10px;">
      <div>
        <b style="margin-left: 5px;">HON. MELCHOR J. GUAMEN</b>
      <br><b style="margin-left: 25%; color: tomato;">Brgy. Captain</b>
      </div>
      <br><br>
      <div style="margin-left: 25px;">
        <b style="margin-left: 10%; color: tomato;">BGY. KAGAWAD</b>
        <br>
        <b>1.HON. LYDIA A. HERRERA</b>
        <br>
        <b>2.HON. LENARD S. MONARES</b>
        <br>
        <b>3.HON. FLORENCIO P. JURIDICO</b>
        <br>
        <b>4.HON. MYRNA M. AGUSTIN</b>
        <br>
        <b>5.HON. ALEXANDER R. ESCOLANO</b>
        <br>
        <b>6.HON. DEXTER J PIAMONTER</b>
        <br>
        <b>7.ANNABE A. TANDOG</b>
      </div>
      <br>
      <br>
      <div>
        <b style="margin-left: 3px;">HON. JUDY ANN D. PIAMONTE</b>
        <br>
        <b style="margin-left: 25%; color: tomato;">Brgy. Secretary</b>
<br>
        <b style="margin-left: 5px;">MRS. JULIA B. VILLAFLOR</b>
        <br>
        <b style="margin-left: 25%; color: tomato;">Brgy. Secretary</b>
<br>

        <b style="margin-left: 5px;">MRS. TERRY S. VILLARAZA</b>
        <br>       
         <b style="margin-left: 25%; color: tomato;">Brgy. Treasurer</b>
      </div>
      
    </td>
    <td class="certif1">
      <label >
      <b style="margin-left: 25%;">
      BARANGAY CERTIFICATIONS
    </b>
    </label>
    <br>
    <br>
      <label style="float: left;">
      <b>
      TO WHOME IT MAY CONCERN:</b>
    </label>
    <br>
    <br>
      <p><label style="margin-left: 60px;">
           <b>THIS IS TO CERTIFY</b> that the following names listed bellow undergo a community service in Barangay Pagalungan, Polomolok, South Cotabato.
</label>
</p>
<br>
<form>
<p>
  <label style="margin-left: 50px;">
    <textarea  type="text" name="message"  value="please input here!" required rows="10" cols="30" style="backface-visibility: hidden;border: none;">

    </textarea>
     </label>
</p>
</form>
<p>
  <b>Further certify</b>, that above mentioned name is belongs to indigent fammily of this Barangay and has no permanent income.
</p>
<br>
<p>
  <label style="margin-left: 60px;">
    <b>This Certification</b> is being issued upon the request of the above-name person for whatever legal purpose it may<p style="margin-left: 60px;">serve best.</p>
  </label>
</p>
<br>
        <br>
         <p>
          <label style="margin-left: 60px;">
            
          ISSUED  this <label style="border-bottom: 1px solid;"><?php echo date("d");?>/<?php echo date("m"); ?>/2022</label>, 
          at  Barangay  Pagalungan,  Polomolok  City  South  Cotabato.
          </label>
        </p>

  </label>
  <br>
  <br>
  <br>
         <div style="margin-left: 75%;">
           <label><b>HON. MELCHOR J. GUAMEN</b><br>Punong Barangay</label> 
         </div>
        <br>
  <br>
  <div style="margin-left: 75%;">
  <label>
  <p>In the Autority of Punong Barangay</p>
</label>
</div>
       <br>
  <br>

         <div style="margin-left: 75%;">
           <label><b>HON. LENARD S. MONARES</b><br>Barangay Kagawad
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
  
    </td>
  </tr>
</tbody>
</table>
</div>
</td>
</tr>
</tbody>
</table>
</div>
</form>
  </body>
</html>