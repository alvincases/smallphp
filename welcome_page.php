<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }

?>
<html>
<head>
	<title>Welcome Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
  <img src="images/cover2.jpg" class="cover">
  <img src ="images/welcome1.png" class ="welcome1">
<div class="loginBox">
    <img src="images/user.png" class="user">

	<h2>Welcome Page</h2>
<form method="post" action="index.php">

  	<!-- notification message -->
  	<?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?>

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
    	<label>Welcome <strong><?php echo $_SESSION['username']; ?>!</strong></label><br><br>
      <input type="submit" class="btn" name="" value ="Proceed">

    <?php endif ?>
</div>
</form>
</body>
</html>
