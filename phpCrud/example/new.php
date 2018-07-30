<?php

$no = 4;
$num = $no;
while($no % 2 == 0)
{
    echo $abc = "2 * ";
    $no = $no/2;

}
for ($i=3; $i < $no ; $i+=2) {
  while ($no % $i == 0) {
    echo $i." * ";
    $no = $no/$i;
  }
}
if ($no > 1) {
  echo $no;
}
echo " = Factors of ".$num;

// for ($i = 2; $i <= 2; $i++) {
//   $a = 2;
//   if ($no%$i==0) {
//     echo $a."<br>";
//   }
// }
// for ($j=3; $j <= $j ; $j++) {
//   # code...
// }

// $num = 3;
//    for ($i = 2; $i <= $num-1; $i++) {
//      if ($num % $i == 0) {
//      $value = true;
//      }
// }
// if ($value == 1) {
//     echo 'The Number '. $num . ' is not prime';
// }  else {
//   echo 'The Number '. $num . ' is prime';
//   }

// $num = 16;
// for($i=2;$i<$num;$i++)
// {
//   if($num%$i==0){
//     echo "Factors are : ".$i."<br>";
//   }
// }
// echo "of ".$num;

// $j=6;
// $mult = 0;
// $i = 11;
// while($i <= 20)
// {
// $mult = $j * $i;
// echo $j."*".$i."=".$mult."<br>";
// $i++;
//
// }

// for($i=1;$i<=5;$i++){
// for ($j=1;$j<=$i; $j++) {
//     echo "*";
//   }
//    echo "<br>";
//  }
//  for($k=1;$k<=6;$k++){
//    for ($l=6;$l>=$k; $l--) {
//      echo "*";
//    }
//    echo "<br>";
//  }

// $n="y";
// $name="royson";
// $length=strlen($name);
// for ($i=0;$i < $length;$i++) {
//   if ($name[$i]==$n) {
//     $name[$i]="";
//   }
// }
// echo "$name";

// $name="royson";
// $s = false;
// $length=strlen($name);
// for ($i=0;$i < $length;$i++) {
//   for ($j=$i+1; $j < $length; $j++) {
//     if ($name[$i]==$name[$j]) {
//       $s = true;
//     }
//   }
// }
// if($s == false){
//   echo "UNique";
// }else{
//   echo "NOT UNique";
// }

// $num = array(1,2,5,7);
// $min = $num[0];
// $max = $num[0];
// foreach ($num as $key => $number) {
//   if ($number < $min)
//   {
//     $min = $number;
//   }
//   elseif ($number > $max)
//   {
//     $max = $number;
//   }
// }
// echo "Smallest number is : ".$min."<br>";
// echo "Largest number is : ".$max;

// $fact = 1;
// for ($i=1; $i <= 4; $i++) {
//   $fact = $fact * $i;
// }
// echo "factorial of 4 is : ".$fact;

// for ($i=0; $i <= 9 ; $i++) {
//   for ($j=0; $j <= 9 ; $j++) {
//     if ($i < 9 || $j < 9) {
//       echo "$i$j, ";
//     }
//     else {
//       echo "$i$j.";
//     }
//     }
// }

?>
