<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="cover1.jpg" class="cover1">
  <img src ="welcome1.png" class ="welcome1">
<div class="loginBox">
  <img src="user.png" class="user">

  	<h2>Login</h2>


  <form method="post" action="login.php"  autocomplete="off">


  		<label>Username</label>
  		<input type="text" name="username" placeholder="Enter your username" required >


  		  	<?php include ('errors.php'); ?><label>Password</label>
  		<input type="password" name="password" placeholder="******" required>


  		<input type="submit" class="btn" name="login_user" value="Login">
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
      <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	 </p>
  </form>
</div>
</body>
</html>
