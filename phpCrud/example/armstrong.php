<!-- <!DOCTYPE html>
<html>
<body>
  <form action="armstrong.php" method="post">
    Number : <input type="number" name="number"><br>
    <input type="submit" name="submit">
  </form>
</body>
</html> -->

<?php
// $conn = mysqli_connect("localhost", 'root', 'acer1234', 'test');
// $number = "";
// // var_dump($_POST['number']);
// if ( isset($_POST['submit']) )
// {
//   if ( $_POST['number'] != null)
//   {
//     $number = $_POST['number'];
//     $sql = "SELECT * FROM armstrong_number WHERE number='$number'";
//     $res = mysqli_query($conn,$sql);
//     if (mysqli_num_rows($res) > 0) {
//       echo "Armstrong Number $number already exist";
//     }
//     else {
//       $sum=0;
//       $temp=$number;
//       while($temp!=0)
//       {
//         $rem=$temp%10;
//         $sum=$sum+$rem*$rem*$rem;
//         $temp=$temp/10;
//       }
//       if($number==$sum)
//       {
//         echo "Armstrong Number $number";
//         $query = "INSERT INTO armstrong_number (number) VALUES ('$number')";
//         $result = mysqli_query($conn, $query);
//       }
//       else
//       {
//           echo "Not an Armstrong Number";
//       }
//     }
//
//   }
//   else{
//       echo "Please Enter A Number";
//   }
//
// }

$num=1;
for ($i=1; $i <= 6; $i++) {
  echo $num."&nbsp";
  $num += 2;
}

?>  
