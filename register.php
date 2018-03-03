<?php include ('server.php'); ?>
<html>
<head>
  <meta charset="utf-8">
  <title>Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

    <img src="images/cover2.jpg" class="cover">
    <img src ="images/welcome2.png" class ="welcome2">
  <div class="loginBox">
    <img src="images/user.png" class="user">

  	<h2>Register</h2>


  <form method="post" action="register.php" autocomplete="off">


  	  <label>Firstname</label>
  	  <input type="text" name="firstname" value="<?php echo $firstname; ?>" placeholder="Enter your firstname" required>


  	  <label>Lastname</label>
  	  <input type="text" name="lastname" value="<?php echo $lastname; ?>"placeholder="Enter your lastname" required>


  	  <label>Username</label>
  	  <input type="text" name="username" value="<?php echo $username; ?>" placeholder="Enter username" required>


  	  <label>Password</label>
  	  <input type="password" name="password_1" placeholder="******" required >


  	 <?php include ('errors.php'); ?> <label>Confirm password</label>

  	  <input type="password" name="password_2" placeholder="******" required>


  	  <input type="submit" name="reg_user" value ="Register">

  	<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
  </form>
</div>

</body>
</html>
