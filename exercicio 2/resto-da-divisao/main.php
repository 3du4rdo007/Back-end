<?php
$num1 = readline();
$num2 = readline();

if ($num1 > $num2){
  $org = $num1;
  $num1 = $num2;
  $num2 = $org;
}
for ($i = $num1; $i < $num2; $i++){
  if($i % 5 == 2 || $i % 5 == 3){
    echo $i . "\n";
  }
}

?>