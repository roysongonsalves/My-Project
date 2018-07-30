<?php

$databaseHost = 'localhost';
$databaseName ='test';
$databaseUsername = 'root';
$databasePassword ='acer1234';

$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword, $databaseName);

$result = mysqli_query($mysqli,"SELECT * FROM Student");

function grades($marks) {
  if($marks >= 80) {
    return "A";
  }
  elseif ($marks >= 70) {
    return "B";
  }
  elseif ($marks >= 60) {
    return "C";
  }
  elseif ($marks >= 50) {
    return "D";
  }
  elseif ($marks >= 35) {
    return "E";
  }
  else {
    return "Fail";
  }
}

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Data</title>
  <style>
  table {
    width:100%;
  }
  table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
  }
  th, td {
    padding: 15px;
    text-align: left;
  }
</style>
</head>
<body>
  <table border="1">
    <tr>
      <th>ID</th>
      <th>NAME</th>
      <th>MARKS</th>
      <th>GRADE</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result))
    {
      ?>
      <tr>
        <td>
          <?=$row['id'];?>
        </td>
        <td>
          <?=$row['name'];?>
        </td>
        <td>
          <?=$row['marks'];?>
        </td>
        <td>
          <?=grades($row['marks'])?>
        </td>
      </tr>
      <?php
    }
      ?>
  </table>
</body>
</html>
