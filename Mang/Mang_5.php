<?php
$dictionary = [
    "hello" => "xin chào",
    "apple" => "quả táo",
    "book" => "quyển sách",
];
foreach($dictionary as $word => $mean) {
    echo $word . ":" . $mean . "<br>";
}