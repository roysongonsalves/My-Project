<?php include("insert.php"); ?>
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
      <h2>Add Your Vehicle.</h2>
    </div>
    <form action="insert.php" method="post">
    <div class="input-group">
      <label>Registration Number</label>
      <input type="text" name="registrationnumber" required>
    </div>
    <div class="input-group">
      <label>Make</label>
      <input type="text" name="make" required>
    </div>
    <div class="input-group">
      <label>Model</label>
      <input type="text" name="model" required>
    </div>
    <div class="input-group">
      <label>Variant</label>
      <input type="text" name="variant" required>
    </div>
    <div class="input-group">
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
    </div>
    <div class="input-group-btn">
      <button type="submit" class="btn" name="add" style="margin-left: 10px;">ADD VEHICLE</button><br>
      <a href="index.php" class="btn" style="text-decoration: none; text-align: -webkit-center;">VEHICLE INFO</a>
    </div>
    </form>
</body>
</html>
