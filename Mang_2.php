<?php
$array = "aaabbacccdeeeaaa";
$cmt = array_fill(0, 26, 0);

for ($i = 0; $i < strlen($array); $i++) {
if ($array[$i] != '\0') {
$cmt[ord($array[$i]) - ord('a')]++;
}
}

for ($i = 0; $i < 26; $i++) {
    if ($cmt[$i] != 0)
echo chr($i + ord('a')).$cmt[$i];
}