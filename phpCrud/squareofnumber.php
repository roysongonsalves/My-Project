<!DOCTYPE html>
<html>
<body>
<form action="squareofnumber.php" method="post">
Value : <input type="text" name="value"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$num = $_POST["value"];
function square($num)
{
  $square=$num*$num;
  echo "The Square Of ".$num." is ".$square;
}
square($num);
?>
//Logic
<?php
function square($num)
{
  $square=$num*$num;
  echo "The Square Of ".$num." is ".$square;
}
square(2);

?>
