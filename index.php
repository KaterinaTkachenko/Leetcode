<?php
$map = [];
$nums = [2, 7, 8];
$target = 10;

for ($i = 0; $i < count($nums); $i++){
    $diff = $target - $nums[$i];
    if(array_key_exists($diff, $map)){
        print_r([$map[$diff], $i]);
    }
    $map[$nums[$i]] = $i;
}