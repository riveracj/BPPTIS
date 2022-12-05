<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;

}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {

  padding: 15px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 50%;
  padding: 5px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */


/* Set a style for the submit button */
.registerbtn {
  background-color: #04AA6D;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}
/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
.re{
  box-shadow: 0 0 8px rgba(0,0,0,0.1);
  margin-top:10px;
  margin-right: 350px;
   margin-left: 350px;
}
</style>
</head>
<body>
<form  method="post" action="managementindex.php">
  <div class="re">
  <div class="container">
    <h1 style="color: dodgerblue;">Register for Administration</h1>
      <fieldset>
        <legend style="color: darkcyan;">Please fill in this form to create an account:</legend>
   
    <label style="margin-left: 90px;" for="name"><b>Name:</b></label>
    <input style="margin-left: 30px;" type="text" placeholder="Enter Name" name="name" id="name" required>
    <br>
    <label  style="margin-left: 58px;"for="password"><b>Password:</b></label>
    <input style="margin-left: 30px;" type="password" placeholder="Enter Password" name="password" id="password" required>
    <br>
    <label for="password-repeat"><b>Repeat Password:</b></label>
    <input style="margin-left: 30px;" type="password" placeholder="Repeat Password" name="password-repeat" id="password-repeat" required>
<br>
<label for="age"style="margin-left: 103px;"><b>Age:</b></label>
    <input style="margin-left: 30px;" type="text" placeholder="Enter age" name="age" id="age" required>
    <br>
    <label for="address"style="margin-left: 80px;"><b>Adress:</b></label>
    <input style="margin-left: 30px;" type="text" placeholder="Enter address" name="address" id="adress" required>
    <br>
<label for="number"style="margin-left: 10px;"><b>Contact Number:<b></label>
<input style="margin-left: 30px;" type="text" placeholder="Enter Number" name="number" id="number" required>
        
      </legend>
    </fieldset>
   
    <button type="submit" class="registerbtn">Register</button>
    <div class="container signin">
    <p>Already have an account? <a href="login.php">Sign in</a>.</p>
  </div>
  </div>
</form>
</body>
</html>
