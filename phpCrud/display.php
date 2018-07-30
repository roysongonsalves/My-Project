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
      <tr>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=1");
        while($row = mysqli_fetch_array($result))
        { echo $row['id']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=1");
        while($row = mysqli_fetch_array($result))
        { echo $row['name']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=1");
        while($row = mysqli_fetch_array($result))
        { echo $row['marks']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=1");
        while($row = mysqli_fetch_array($result))
        { if($row['marks']>80){ echo "A"; } elseif($row['marks']<=80&&$row['marks']>=70){ echo "B"; } elseif($row['marks']<=80&&$row['marks']>=60){ echo "C"; } elseif($row['marks']<=70 && $row['marks']>=60) { echo "B"; }elseif($row['marks']<=80&&$row['marks']>=70){ echo "B"; } else{ echo "Fail"; } }?></td>
      </tr>
      <tr>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=2");
        while($row = mysqli_fetch_array($result))
        { echo $row['id']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=2");
        while($row = mysqli_fetch_array($result))
        { echo $row['name']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=2");
        while($row = mysqli_fetch_array($result))
        { echo $row['marks']; }?></td>
        <td>none</td>
      </tr>
      <tr>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=3");
        while($row = mysqli_fetch_array($result))
        { echo $row['id']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=3");
        while($row = mysqli_fetch_array($result))
        { echo $row['name']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=3");
        while($row = mysqli_fetch_array($result))
        { echo $row['marks']; }?></td>
        <td>none</td>
      </tr>
      <tr>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=4");
        while($row = mysqli_fetch_array($result))
        { echo $row['id']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=4");
        while($row = mysqli_fetch_array($result))
        { echo $row['name']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=4");
        while($row = mysqli_fetch_array($result))
        { echo $row['marks']; }?></td>
        <td>none</td>
      </tr>
      <tr>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=5");
        while($row = mysqli_fetch_array($result))
        { echo $row['id']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=5");
        while($row = mysqli_fetch_array($result))
        { echo $row['name']; }?></td>
        <td><?php include_once("config.php");
        $result = mysqli_query($mysqli,"SELECT * FROM Student WHERE ID=5");
        while($row = mysqli_fetch_array($result))
        { echo $row['marks']; }?></td>
        <td>none</td>
      </tr>
    </table>
  </body>
</html>
<?php


?>
