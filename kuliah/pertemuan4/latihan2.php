<?php
// nested loop / looping bersarang / looping di dalam looping

for ($i = 8; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "$i ";
    }
    echo "<br>";
}
