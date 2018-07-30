<?php
$conn = mysqli_connect("localhost", 'root', 'acer1234', 'temp1');

if(!$conn) {
  die("Error Connecting to DB");
}

$res = mysqli_query($conn, "select * from person");

echo "Total " . mysqli_num_rows($res). " records!<br />";

$num=1;
while($row = mysqli_fetch_assoc($res)) {

  if($num%2!=0) {
    echo $num.$row["name"] . " id is ".$row["id"] ." <br />";

  }
  $num++;

}


 ?>
