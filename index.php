<?php
function stairs($arg1, $arg2) {
  for($i=$arg1; $i<=$arg2; $i++){
  for($j=1; $j<=$i; $j++)
echo $j;
echo '<br>';
}
}
stairs(1, 50);
?>
