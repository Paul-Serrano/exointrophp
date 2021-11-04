<?php 

function somme($m) {
    $s = 0;
    for($i = 1; $i < $m + 1; $i++) {
        $s = $s + $i;
    }
    echo $s;
}

somme(30);

?>