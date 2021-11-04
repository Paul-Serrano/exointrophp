<?php

function somme($m) {
    $s = 0;
    for($i = 1; $i < $m + 1; $i++) {
        if($i % 2 == 0) {
            $s = $s + $i;
        }
        else {
            $s = $s;
        }
    }
    echo $s;
}

somme(30);

?>