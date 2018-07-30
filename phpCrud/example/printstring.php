  <?php
  function letter()
  {
    $string = "ROYOS";
    $i = 0;
    // echo "The String is : ".$string."<br/>";
    while(!empty($string[$i]))
    {
      echo $string[$i]."<br>";
      $i++;
    }

  }
  letter();
   ?>
