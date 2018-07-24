<?php
$db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');

$id = $_POST['id'];
$registrationnumber = $_POST['registrationnumber'];
$make = $_POST['make'];
$model = $_POST['model'];
$variant = $_POST['variant'];
$fuel = $_POST['fuel'];
$altfuel = $_POST['altfuel'];

$results=mysqli_query($db, "UPDATE vehicle SET registrationnumber='$registrationnumber', make='$make', model='$model', variant='$variant', fuel='$fuel' , altfuel='$altfuel' WHERE id=$id");

if($_POST['registrationnumber'] != '')
{
  header('Location: index.php');
}
//to display the record again
$id=$_GET['id'];
$result = mysqli_query($db,"SELECT * FROM vehicle WHERE id=$id");
while ($res=mysqli_fetch_array($result)) {
  $registrationnumber = $res['registrationnumber'];
  $make = $res['make'];
  $model = $res['model'];
  $variant = $res['variant'];
  $fuel = $res['fuel'];
  $altfuel = $res['altfuel'];
}
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mileage Tracker Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
      background-image: url("mileage.jpg");
    }
  </style>
  </head>
  <body>
    <div class="header">
      <h2>Edit Vehicle Information.</h2>
    </div>
    <form action="edit.php" method="post">
    <div class="input-group">
      <label>Registration Number</label>
      <input type="text" name="registrationnumber" value="<?php echo $registrationnumber; ?>" required>
    </div>
    <div class="input-group">
      <label>Make</label>
      <input type="text" name="make" value="<?php echo $make; ?>" required>
    </div>
    <div class="input-group">
      <label>Model</label>
      <input type="text" name="model" value="<?php echo $model; ?>" required>
    </div>
    <div class="input-group">
      <label>Variant</label>
      <input type="text" name="variant" value="<?php echo $variant; ?>" required>
    </div>
    <div class="input-group">
      <label>Fuel</label>
      <select name="fuel" value="<?php echo $fuel; ?>" required>
        <option value="null">Please Select</option>
        <option value="petrol"<?php if($fuel == 'petrol'){?> selected <?php } ?> >Petrol</option>
        <option value="diesel" <?php if($fuel == 'diesel'){ ?> selected <?php } ?>>Diesel</option>
      </select>
    </div>
    <div class="input-group">
      <label>Alternate Fuel</label>
      <select name="altfuel" value="<?php echo $altfuel; ?>" required>
        <option value="null">Please Select</option>
        <option value="cng"<?php if($altfuel == 'cng'){?> selected <?php } ?>>CNG</option>
        <option value="lpg"<?php if($altfuel == 'lpg'){?> selected <?php } ?>>LPG</option>
      </select>
    </div>
    <div class="input-group-btn">
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
      <button type="submit" class="btn" name="update" style="margin-left: 10px;">UPDATE</button>
      <a href="index.php" class="btn" style="text-decoration: none; text-align: -webkit-center;">BACK</a>
    </div>
    </form>
</body>
</html>
