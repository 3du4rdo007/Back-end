<?php

$num1 = readline();
$num2 = readline();
$num3 = readline();

if ($num1 > $num2 && $num1 > $num3){
  echo "{$num1} eh o maior";
} else if ($num2 > $num1 && $num2 > $num3){
  echo "{$num2} eh o maior";
}else{
  echo "{$num3} eh o maior";
}
?>