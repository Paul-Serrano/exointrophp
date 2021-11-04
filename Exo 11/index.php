<?php

function convertTime($t) {
    $h = floor($t / 3600);
    $m = floor(($t % 3600) / 60);
    $s = ($t % 3600) % 60;
    echo $h, "h", $m, "m", $s, "s<br>";
}

convertTime(5555);
convertTime(521);
convertTime(145);

?>