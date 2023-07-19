<?php
$array = [[2, 4, 3], [5, 3, 7], [5, 1, 2]];
$arr = [];
$n = 1;
for ($i = 0; $i < count($array); $i++) {
    echo "<br>";
    for($j = 0; $j < count($array); $j++) {
        echo $array[$i][$j] . " ";
    }
}
$t = 5;
echo "<br><br>";
while ($t--) {
    for ($i = 0; $i < count($array); $i++) {
        for ($j = 0; $j < count($array); $j++) {
            if ($i == 0) {
                $arr[$j][2] = $array[$i][$j];
            } elseif ($i == 1) {
                $arr[$j][1] = $array[$i][$j];
            } elseif ($i == 2) {
                $arr[$j][0] = $array[$i][$j];
            }
        }

}
    $array = $arr;
}
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array); $j++) {
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
