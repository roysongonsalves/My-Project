<html>
<head>
  <title>Company Data</title>
</head>
<body>
<?php
include_once("config.php");
// if(isset($_POST['Submit']))
// {
  $name = $_POST['Name'];
  $type = $_POST['Type'];
  $location = $_POST['Location'];
  $no = $_POST['No'];
  $director = $_POST['Director'];
  $address = $_POST['Address'];
  $result = mysqli_query($mysqli,"INSERT INTO company(name,type,location,no,director,address) VALUES('$name', '$type', '$location', '$no', '$director', '$address')");
  echo "<font color='green'>Data added successfully.";

// }
?>
</body>
</html>
