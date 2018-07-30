<?php
function hcf($i1,$i2)
{
  if($i2!=0)
  {
    return hcf($i2,$i1%$i2);
  }
  else
  {
    return $i1;
  }
}
echo hcf(4,6);
?>
