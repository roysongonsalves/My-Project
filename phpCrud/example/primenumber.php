<?php

// for($a=1; $a<=10; $a++)
// {
//   $c=0;
//   for($b=1; $b<=$a; $b++)
//   {
//     if ($a%$b==0) {
//       $c++;
//     }
//   }
//   if($c == 2)
//   {
//     echo "Prime Numeber are : $a<br>";
//   }
// }

//simple logic for prime number
$check=0;
$num=10;
for($i=2;$i<=($num/2);$i++)
{
  if($num%$i==0)
  {
    $check++;
    break;
  }
}
if($check==0)
{
  echo "$num is a Prime Number";
}
else
{
  echo "$num is not a Prime Number";
}

?>
