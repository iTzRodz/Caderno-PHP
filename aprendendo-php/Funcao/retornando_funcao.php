<?php
function soma($a) {
    return function($b) use ($a) {
        return $a + $b;
    };
}

echo soma(16)(4);

?>