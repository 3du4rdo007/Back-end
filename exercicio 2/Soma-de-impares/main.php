<?php

function impar($num) {
    return $num % 2 != 0;
}

function soma($x, $y) {
    $sum = 0;
    if ($x > $y) {
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    for ($i = $x + 1; $i < $y; $i++) {
        if (impar($i)) {
            $sum += $i;
        }
    }
    return $sum;
}

$x = intval(fgets(STDIN));
$y = intval(fgets(STDIN));

echo soma($x, $y);

?>

