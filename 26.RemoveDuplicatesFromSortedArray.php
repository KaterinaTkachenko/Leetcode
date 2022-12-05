<?php
$nums = [1,1,2];

$index = 1;
for ($i = 1; $i < count($nums); $i++) {
    if($nums[$i] !== $nums[$i-1]){
        $nums[$index++] = $nums[$i];
    }
}

print_r($index);