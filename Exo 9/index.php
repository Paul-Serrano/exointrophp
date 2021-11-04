<?php 

function factoriel($n) {
    $p = 1;
    for($i = 1; $i < $n + 1; $i++) {
        $p = $p * $i;
    }
    echo $p;
}

factoriel(5);

?>