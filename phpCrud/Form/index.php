<?php
  session_start();

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php');
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div class="header">
	<h2>Photo Page</h2>
</div>



  	<!-- <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
      	<h3>
          <?php
          	echo $_SESSION['success'];
          	unset($_SESSION['success']);
          ?>
      	</h3>
      </div>
  	<?php endif ?> -->

    <!-- logged in user information -->
    <?php  if (isset($_SESSION['username'])) : ?>
      <div class="content-top">
    	<p style="margin-left:40px; font-size: 25px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
      <p style="float: right;"> <a href="index.php?logout='1'" style="color: red;"><input type='button' value='LOGOUT' style="background: #5F9EA0; color: white; height: 30px; width: 80px; font-weight: bold;"></a> </p>
    </div><br><hr/><br>

    <?php endif ?>
    <div class="btn-add">
      <a href="add-photo.php" ><input type='button' value='ADD PHOTO' class="btn-add"></a>
    </div>

    <?php

    $db = mysqli_connect('localhost', 'root', 'acer1234', 'register');
    if (isset($_POST['upload'])) {
    $result = mysqli_query($db, "SELECT * FROM photo");

    while ($row = mysqli_fetch_array($result)) {

    echo "<img src='Form/" . $row['file_name'] . "' />";
  
      }
    }
    ?>
</body>
</html>
