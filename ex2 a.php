<?php
  $array = array();
  $n=4;
  $fatorial=1;
  $count=1;

  while($count<=$n){
   $fatorial *= $count;
   $count++;
   $array[] = $fatorial;
  } 
   print_r($array);
?>