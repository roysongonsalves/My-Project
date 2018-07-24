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
	<title>Mileage Tracker Home</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  <style>
  body {
    background-image: url("mileage.jpg");
  }
</style>
</head>
<body>
<div class="header">
	<h2>MILEAGE TRACKER.</h2>
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
    	<p style="margin-left:40px; font-size: 25px;">Welcome <strong><?php echo $_SESSION['username']; ?></strong>
        <p style="float: right;"> <a href="index.php?logout" style="color: red;"><input type='button' value='LOGOUT' style="background: #5F9EA0; color: white; height: 30px; width: 80px; font-weight: bold; margin-right: 25px;"></a>
        </p>
      </p>
    </div><br><hr><br>
    <?php endif ?>

    <div class="btn-add" style="margin-left:600px;">
      <a href="form.php" ><input type='button' value='ADD VEHICLE' class="btn-add"></a>
    </div><br><hr><br><br>

    <table width="100%" border="2" style="border-collapse:collapse;">
    <thead>
    <tr bgcolor='#CCCCCC'>
      <th><strong>S.No</strong></th>
      <th><strong>Registration Number</strong></th>
      <th><strong>Make</strong></th>
      <th><strong>Model</strong></th>
      <th><strong>Variant</strong></th>
      <th><strong>Fuel</strong></th>
      <th><strong>Alternate Fuel</strong></th>
      <th><strong>Edit</strong></th>
      <th><strong>Delete</strong></th>
    </tr>
    </thead>
    <tbody>
      <?php
      $db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');
      $username_reg = $_SESSION['username'];
      $user_id=$_SESSION['id'];
      $count=1;
      $results = mysqli_query($db, "SELECT * FROM vehicle WHERE user_id='$user_id'");
      while($res = mysqli_fetch_array($results)) {?>
          <tr><td align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $res['registrationnumber']; ?></td>
          <td align="center"><?php echo $res['make']; ?></td>
          <td align="center"><?php echo $res['model']; ?></td>
          <td align="center"><?php echo $res['variant']; ?></td>
          <td align="center"><?php echo $res['fuel']; ?></td>
          <td align="center"><?php echo $res['altfuel']; ?></td>
          <td align="center">
            <a href="edit.php?id=<?php echo $res["id"]; ?>">Edit</a>
          </td>
          <td align="center">
            <a href="delete.php?id=<?php echo $res["id"]; ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
          </td>
        </tr>
        <?php $count++; } ?>
      </tbody>
    </table>
    <br><br><hr><br>
    <div class="btn-add" style="margin-left:470px; display:inline-flex">
      <a href="refuel.php" ><input type='button' value='ADD FUEL' class="btn-add"></a>
    </div>
    <a href="fuel.php" ><input type='button' value='CHECK FUEL' class="btn-add" style="margin-left:120px;"></a><br><br><hr><br>
</body>
</html>
