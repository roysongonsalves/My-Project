<?php
session_start();
include("insert-refuel.php");
$db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');

$vehicles = array();
$user_id=$_SESSION['id'];
$results = mysqli_query($db, "SELECT * FROM vehicle WHERE user_id='$user_id'");
while($res = mysqli_fetch_array($results)) {
  $key  = $res['id'];
  $value = $res['registrationnumber'];
  $vehicles[$key] = $value;
}
// var_dump($vehicles);
// var_dump(array_column($vehicles,'vehicle'));

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>REFUELING Form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
    body {
      background-image: url("mileage.jpg");
    }
  </style>
  </head>
  <body>
    <div class="header">
      <h2>Add Fuel Details.</h2>
    </div>
    <form action="insert-refuel.php" method="post">
    <div class="input-group">
      <label>Vehicle Registration Number</label>
      <select name="vehicle_id" required>
        <option selected value="null">Please Select</option>
        <?php foreach ($vehicles as $key=>$value): ?>
        <option value="<?= $key; ?>"><?= $value; ?></option>
        <?php endforeach; ?>
      </select>
    </div>
    <div class="input-group">
      <label>Odometer (Km)</label>
      <input type="text" name="odometer" required>
    </div>
    <!-- <div class="input-group">
      <label>Fuel</label>
      <select name="fuel" required>
        <option selected value="null">Please Select</option>
        <option value="petrol">Petrol</option>
        <option value="diesel">Diesel</option>
      </select>
    </div>
    <div class="input-group">
      <label>Alternate Fuel</label>
      <select name="altfuel" required>
        <option selected value="null">Please Select</option>
        <option value="cng">CNG</option>
        <option value="lpg">LPG</option>
      </select>
    </div> -->
    <div class="input-group">
      <label>Quantity (Kg / Litres)</label>
      <input type="text" name="quantity" required>
    </div>
    <div class="input-group">
      <label>Price (Rupees)</label>
      <input type="text" name="price" required>
    </div>
    <div class="input-group-btn">
      <button type="submit" class="btn" name="add" style="margin-left: 10px;">ADD</button>
      <a href="fuel.php" class="btn" style="text-decoration: none; text-align: -webkit-center;">FUEL INFO</a>
    </div>

    </form>
    <br>
</body>
</html>
