<?php
$num=9;
for ($x=2; $x<$num ; $x++)
{
  if ($num%$x==0) {
    echo "not a prime number";
    break;
  }
  else {
    echo "prime number".$num;
    break;
  }
}
?>
