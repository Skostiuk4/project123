<?php

 function stairs($arg1, $arg2, $operation) {
 	
  for ($i = $arg1; $i <= $arg2; $i++) {
   for ($j = 1; $j <= $i; $j ++) {
     echo $j . $operation;
   }
   echo '<br>';
  }
 }
stairs(1, 7, '-');

?>
