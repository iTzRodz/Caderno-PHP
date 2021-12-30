<?php

$pi = 3.14;

if ($pi - pi() <= 0.002) {
    echo " Praticamente igual";
} else if ($pi - pi () <= 6) {
    echo "Quase";
}else {
    echo "Errado";
}
?>