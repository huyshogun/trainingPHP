<?php
for ($n = 0; $n < 3; $n++) {
    echo '<br>';
    for($m = 0; $m < 7; $m++) {
        echo ' *';
    }
}
echo '<br><br>';
for ($n = 0; $n < 6; $n++) {
    echo '<br>';
    for($m = 0; $m < 6; $m++) {
        if($m < $n) {
            echo '* ';
        }
    }
}



