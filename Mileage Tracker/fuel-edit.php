<?php
session_start();
$db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');

$id = $_POST['id'];
$registrationnumber = $_POST['vehicle_id'];
$odometer = $_POST['odometer'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
$vehicles = array();
$user_id=$_SESSION['id'];
$resul = mysqli_query($db, "SELECT * FROM vehicle WHERE user_id='$user_id'");
while($resu = mysqli_fetch_array($resul)) {
  $key  = $resu['id'];
  $value = $resu['registrationnumber'];
  $vehicles[$key] = $value;
}


$results=mysqli_query($db, "UPDATE refuel SET vehicle_id='$registrationnumber', odometer='$odometer', quantity='$quantity', price='$price' WHERE id=$id");

if($_POST['odometer'] != '')
{
  header('Location: fuel.php');
}
//to display the record again
$id= $_GET['id'];
$result = mysqli_query($db, "SELECT * FROM refuel WHERE id=$id");
while ($res=mysqli_fetch_array($result)) {
  $registrationnumber = $res['vehicle_id'];
  $odometer = $res['odometer'];
  $quantity = $res['quantity'];
  $price = $res['price'];
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
      <h2>Edit FUEL Information.</h2>
    </div>
    <form action="fuel-edit.php" method="post">

    <div class="input-group">
      <label>Vehicle Registration Number</label>
      <select name="vehicle_id" required>
        <option selected value="null">Please Select</option>
        <?php foreach ($vehicles as $key=>$value): ?>
        <option value="<?= $key; ?>"<?php if($key == $registrationnumber){?> selected <?php } ?>><?= $value; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="input-group">
      <label>Odometer (Km)</label>
      <input type="text" name="odometer" value="<?= $odometer; ?>" required>
    </div>
    <div class="input-group">
      <label>Quantity (Kg / Litres)</label>
      <input type="text" name="quantity" value="<?= $quantity; ?>" required>
    </div>
    <div class="input-group">
      <label>Price (Rupees)</label>
      <input type="text" name="price" value="<?= $price; ?>" required>
    </div>
    <!-- <div class="input-group">
      <label>Fuel</label>
      <select name="fuel" value="<?php echo $fuel; ?>" required>
        <option value="null">Please Select</option>
        <option value="petrol"<?php if($fuel == 'petrol'){?> selected <?php } ?> >Petrol</option>
        <option value="diesel" <?php if($fuel == 'diesel'){ ?> selected <?php } ?>>Diesel</option>
      </select>
    </div> -->

    <div class="input-group-btn">
      <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
      <button type="submit" class="btn" name="update" style="margin-left: 10px;">UPDATE</button>
      <a href="fuel.php" class="btn" style="text-decoration: none; text-align: -webkit-center;">BACK</a>
    </div>
    </form>
</body>
</html>
