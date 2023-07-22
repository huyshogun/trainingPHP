<?php
$S = "aaabbacccdeeeaaa";
$str = array(); $j = 0; $k = 0;
$cmt = array_fill(0, 26, 0);
$b = array_fill(0, 26, 0);
for($i = 0; $i < strlen($S); $i++) {
    if($S[$i] != '\0') {
        if($S[$i] == $S[$i+1]) {
            $b[$i+1] = 1;
            $cmt[$j]++;
        } else if($S[$i-1] != $S[$i] && $S[$i] != $S[$i+1]) {
            $j++;
        } else { $j++; } } }
for($i = 0; $i < strlen($S); $i++) {
    if($b[$i] == 0) {
        $str[$k++] = $S[$i];
    }
}
for($i = 0; $i < $k; $i++) {
    echo $str[$i] . ($cmt[$i]+1);
}
