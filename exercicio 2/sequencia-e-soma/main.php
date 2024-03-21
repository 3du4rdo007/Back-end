<?php
$m;
$n;
$maior;
$menor;
$soma;

while(1){
  $m = readline("\nDigite um número: ");
  $n = readline("Digite outro número: ");
  if($m == 0 || $n == 0){
    break;
  }
  if($m > $n){
    $maior = $m;
    $menor = $n;
  }else{
    $maior = $n;
    $menor = $m;
  }
  $soma = 0;
  for($i = $menor; $i <= $maior; $i++){
    echo $i . " ";
    $soma += $i;
    
    }
echo " Sum={$soma}";
}
?>