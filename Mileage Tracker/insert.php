<?php
session_start();

$db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');

$username_regis = $_SESSION['username'];

$results = mysqli_query($db, "SELECT id FROM register WHERE username='".$username_regis."'");

$row = mysqli_fetch_assoc($results);
$_SESSION['id'] = $row['id'];

if(isset($_POST['add']))
{
$registrationnumber = $_POST['registrationnumber'];
$make = $_POST['make'];
$model = $_POST['model'];
$variant = $_POST['variant'];
$fuel = $_POST['fuel'];
$altfuel = $_POST['altfuel'];
$user_id = $_SESSION['id'];

$query = "INSERT INTO vehicle (registrationnumber,make,model,variant,fuel,altfuel,user_id) VALUES('$registrationnumber','$make','$model','$variant','$fuel','$altfuel','$user_id')";

$result = mysqli_query($db,$query);
// var_dump($result);
echo "<font color='green'>Vehicle Added Successfully.";
if($_POST['registrationnumber'] != '')
{
  header('Location: index.php');
}
}
?>
