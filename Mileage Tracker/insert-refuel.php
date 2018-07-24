<?php
session_start();

$db = mysqli_connect('localhost', 'root', 'acer1234', 'mileage_tracker');

if(isset($_POST['add']))
{
$registrationnumber = $_POST['vehicle_id'];
$odometer = $_POST['odometer'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];
// $fuel = $_POST['fuel'];
$user_id = $_SESSION['id'];


$query = "INSERT INTO refuel (vehicle_id,odometer,quantity,price,user_id) VALUES('$registrationnumber','$odometer','$quantity','$price','$user_id')";

$resul = mysqli_query($db,$query);
var_dump($resul);
echo "<font color='green'>Vehicle Added Successfully.";
if($_POST['odometer'] != '')
{
  header('Location: fuel.php');
}
}
?>
