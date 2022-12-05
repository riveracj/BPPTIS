
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
  <head>
    <title>
      practice
    </title>
    <h2>MY personal ideas!</h2>
  </head>
  <form class="post" action="exampleindex.php">
  	 <?php
include_once 'conn.php';
if(count($_POST)>0) {
mysqli_query($conn,"SELECT examplename set name='" . $_POST['name'] . "', address='" . $_POST['address'] . "', age='" . $_POST['age'] . "',");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM examplename  WHERE id='" . $_GET['id'] . "'");
$items= mysqli_fetch_array($result);
?>
    <fieldset>
      <legend>input data here!</legend>
      <label>
        Name:<input type="text" name="name" value="<?php echo $items['name']?>">
      </label>
      <label>
        address:<input type="text" name="address" value="<?php echo $items['address']?>">
      </label>
      <label>
        age:<input type="text" name="age" value="<?php echo $items['age']?>">
      </label>
<button formaction="example.php">
back
</button>
    </fieldset>
</form>
</body>
  </html>