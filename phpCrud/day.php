<html>
<body>

<form action="day.php" method="post">
Value : <input type="text" name="value"><br>
<input type="submit">
</form>

</body>
</html>
<?php
$value = $_POST["value"];
switch ($value)
{
  case 0:
    echo "It is Sunday.";
    break;
  case 1:
    echo "It is Monday.";
    break;
  case 2:
    echo "It is Tuesday.";
    break;
  case 3:
    echo "It is Wednesday.";
    break;
  case 4:
    echo "It is Thursday.";
    break;
  case 5:
    echo "It is Friday.";
    break;
  case 6:
    echo "It is Saturday.";
    break;
  default:
    echo "Invalid Day";
    break;
}
  //
  // if ($value == 0) {
  //   echo "It is Sunday.";
  //   // break;
  // }
  // elseif ($value == 1) {
  //   echo "It is Monday.";
  //   // break;
  // }
  // elseif ($value == 2) {
  //   echo "It is Tuesday.";
  //   // break;
  // }
  // elseif ($value == 3) {
  //   echo "It is Wednesday.";
  //   // break;
  // }
  // elseif ($value == 4) {
  //   echo "It is Thursday.";
  //   // break;
  // }
  // elseif ($value == 5) {
  //   echo "It is Friday.";
  //   // break;
  // }
  // elseif ($value == 6) {
  //   echo "It is Saturday.";
  //   // break;
  // }
  // else {
  //   echo "Invalid Day.";
  //   // break;
  // }
  //

 ?>
