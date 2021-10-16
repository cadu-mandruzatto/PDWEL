<?php
  $n = 100;
  $array = array();

  for($x = 1; $x <= $n; $x++)
  {
  if($x == soma($x))
  {
   $array[] = $x;
  }
  }
   print_r($array);

  function soma($n){
   $divisores=0;
   for($count=1 ; $count<$n ; $count++)
    if($n % $count==0)
     $divisores += $count;
   return $divisores;
  }

 ?>