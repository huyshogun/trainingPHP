<?php

 $array = [1,2,5,98,2,32,632,52,41,10];
$max = 0;
for($i = 0; $i < 10; $i++) {
    for ($j = $i + 1; $j < 10; $j++) {
        if ($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
    echo $array[$i] . " ";
}