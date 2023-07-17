<?php
$n = 20;


$m[0] = 1;
$m[1] = 1;
$sum = $m[0] + $m[1];
for ($i = 2; $i < $n; $i++) {
    $m[$i] = $m[$i - 1] + $m[$i - 2];
    $sum = $sum + $m[$i];
}
echo $sum;

