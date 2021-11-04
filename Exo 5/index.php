<?php

function numerer($m) {
    for($i = 1; $i < $m + 2; $i++) {
        for($j = 1; $j < $i; $j++) {
            echo $j, " ";
        }
        echo "<br>";
    }
}

numerer(25);

?>