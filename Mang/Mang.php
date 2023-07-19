<?php
/* $array = [1,2,5,98,2,32,632,52,41,10];
$max = 0; // 0. Sap xep lai day
for($i = 0; $i < 10; $i++) {
    for($j = $i+1; $j < 10; $j++) {
        if($array[$i] > $array[$j]) {
            $temp = $array[$i];
            $array[$i] = $array[$j];
            $array[$j] = $temp;
        }
    }
    echo $array[$i]." ";
}
 1.đảo ngược chuỗi kí tụ
for($i = 0; $i < 5; $i++) {
    $temp = $array[$i];
    $array[$i] = $array[count($array) - 1 - $i];
    $array[count($array) - 1 - $i] = $temp;

}
for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}
// 3, In ra tổng hai đường chéo của mảng
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
*/








