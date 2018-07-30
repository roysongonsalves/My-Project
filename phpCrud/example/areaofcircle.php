<!DOCTYPE html>
<html>
<body>
<form action="areaofcircle.php" method="post">
Value : <input type="text" name="value"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$radius = $_POST["value"];
function area($radius)
{
  $area=3.14*$radius*$radius;
  echo "The Area of Circle is ".$area." with its Radius ".$radius;
}
area($radius);
?>

//Logic
<?php
function area($radius)
{
  $area=3.14*$radius*$radius;
  echo "The Area of Circle is ".$area." with its Radius ".$radius;
}
area(2);
?>
