<?php

function mySqrt($x) {
    for($i = 0; $i < PHP_INT_MAX; $i++) {
        if ($i * $i == $x) {
            return $i;
        } else if ($i * $i > $x) {
            return $i-1;
        }
    }
}

echo mySqrt('8');
