<?php
//70. Climbing Stairs
$n = 4;
$x = 1;
$y = 1;
for ($i=1; $i < $n; $i++){
    $t = $y; //1 2 3 5
    $y = $x+$y;// 2 3 5 8
    $x = $t; // 1 2 3 5
}

echo $y;