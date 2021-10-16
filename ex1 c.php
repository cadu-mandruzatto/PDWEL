<?php
  $n = 4;

  if($n == soma($n))
   echo "É perfeito";
  else
   echo "Não é perfeito";

  function soma($n){
   $divisores=0;
   for($count=1 ; $count<$n ; $count++)
    if($n % $count==0)
     $divisores += $count;
   return $divisores;

  }
 ?>