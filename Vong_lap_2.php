<?php
$N = 5;
$n = 2;
$count = 0;
while ($count < $N) {
    $isPrime = true;
    for ($m = 2; $m <= sqrt($n); $m++) {
        if ($n % $m == 0) {
            $isPrime = false;
            break;
        }
    }
    if ($isPrime) {
        echo $n . " ";
        $count++;
    }
    $n++;
}





