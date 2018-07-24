<?php
  session_start();
  $db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');
  $id = $_GET['id'];
  $result = mysqli_query($db,"DELETE FROM vehicle WHERE id=$id");
  header("Location:index.php");
?>
