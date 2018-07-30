<html>
<head>
  <title>Add Data</title>
</head>
<body>
<?php
include_once("config.php");
if(isset($_POST['Submit']))
{
  $name = $_POST['name'];
  $age = $_POST['age'];
  $email = $_POST['email'];
  if(empty($name) || empty($age) || empty($email))
  {
      if(empty($name))
      {
        echo "<font color='red'>Name field is empty.</font><br>";
      }
      if(empty($age))
      {
        echo "<font color='red'>Age field is empty.</font><br>";
      }
      if(empty($email))
      {
        echo "<font color='red'>Email field is empty.</font><br>";
      }
      echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
  }
  else
  {
    $result = mysqli_query($mysqli,"INSERT INTO users(name,age,email) VALUES('$name', '$age', '$email')");
    echo "<font color='green'>Data added successfully.";
    echo "<br/><a href='index.php'>View Result</a>";
  }

}
?>
</body>
</html>
