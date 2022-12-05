
<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
</head>
<body style="text-align: center; padding-top: 100px;padding-left: 515px; " >
<form action="loginhistory.php" method="post" style="max-width:300px;margin:5px; border: 1px solid gray; padding: 10px;box-shadow: 0 0 8px rgba(0,0,0,0.1); " >
  
  <div class="container">
  <h2>Barangay Pagalungan Portfolio<br>and Tracking System</h2>

  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="password" required>
  </div>

  <button type="submit" class="btn">Login</button>
  <div class="container signin">
    <p>No account for Administration?<a href="management.php">Register</a>.</p>
  </div>
  <div class="container signin">
    <a href="managementlogin.php">login-as-staff</a>.
  </div>
  
</div>
</form>
</body>
</html>
