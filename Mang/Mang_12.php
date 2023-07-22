<?php
$start = 0;
$end = 10;
$size = 3;
$step = $size * $size;
$random_number_range = range($start, $end);
shuffle($random_number_range);

$array = array_slice($random_number_range, 0, $step);
$array = array_chunk($array, $size);

$i1 = 0; $i2 = 0;
for($i = 0; $i < count($array); $i++) {
    for($j = 0;$j < count($array); $j++) {
        if($i == $j) {
            $i1 = $i1 + $array[$i][$j];
        }
        if($i + $j == count($array)) {
            $i2 = $i2 + $array[$i][$j];
        }

    }

}
$ii = $i1 + $i2;
echo $ii;