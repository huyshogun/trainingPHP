<?php
$array = [1,2,5,98,2,32,632,52,41,10];
for($i = 0; $i < 5; $i++) {
    $temp = $array[$i];
    $array[$i] = $array[count($array) - 1 - $i];
    $array[count($array) - 1 - $i] = $temp;

}
for($i = 0; $i < count($array); $i++) {
    echo $array[$i] . " ";
}