<!DOCTYPE html>
<html>
<body>
<form action="function-practice.php" method="post">
Value 1 : <input type="text" name="value"><br>
Value 2 : <input type="text" name="value2"><br>
<input type="submit">
</form>
</body>
</html>
<?php
$num1 = $_POST["value"];
$num2 = $_POST["value2"];
function addition($num1,$num2)
{
    $sum=$num1+$num2;
    echo "The Sum of ".$num1." and ".$num2." is ".$sum;
}
addition($num1,$num2);
?>

//Logic
<?php
function addition($num1,$num2)
{
    $sum=$num1+$num2;
    echo "The Sum of ".$num1." and ".$num2." is ".$sum;
}
addition(10,20);
?>
