<?php
$array = "abacaba";
for($i = 0; $i < strlen($array)/2; $i++) {
    if($array[$i] != $array[strlen($array) - 1 - $i]) {
        echo "Khong la chuoi doi xung";
        return 0;
    }
}
echo "La chuoi doi xung";