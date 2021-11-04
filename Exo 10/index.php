<?php 

function change($a, $b) {
    [$a, $b] = [$b, $a];
    echo "(", $a, ", ", $b,")";
}

change(5, 4);

?>