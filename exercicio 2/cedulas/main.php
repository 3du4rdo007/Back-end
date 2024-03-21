<?php
$ced = intval(readline());
echo "{$ced}\n";

$notas100 = intval($ced / 100);
echo "{$notas100} nota(s) de R$ 100,00\n";
$ced %= 100;

$notas50 = intval($ced / 50);
echo "{$notas50} nota(s) de R$ 50,00\n";
$ced %= 50;

$notas20 = intval($ced / 20);
echo "{$notas20} nota(s) de R$ 20,00\n";
$ced %= 20;

$notas10 = intval($ced / 10);
echo "{$notas10} nota(s) de R$ 10,00\n";
$ced %= 10;

$notas5 = intval($ced / 5);
echo "{$notas5} nota(s) de R$ 5,00\n";
$ced %= 5;

$notas2 = intval($ced / 2);
echo "{$notas2} nota(s) de R$ 2,00\n";
$ced %= 2;

$notas1 = intval($ced / 1);
echo "{$notas1} nota(s) de R$ 1,00\n";
$ced %= 1;

?>