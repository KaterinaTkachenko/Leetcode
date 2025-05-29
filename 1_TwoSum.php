<?php
$nums = [2, 7, 8];
$target = 9;
$res = [];
$map = [];
function twoSum1($nums, $target) {
    for($i = 0; $i < count($nums); $i++) {
        $x = $target - $nums[$i];
        if (in_array($x, $nums)) {
            $x_key = array_search($x, $nums);
            if ($x_key !== $i)
                $res = [$x_key, $i];
        }
    }
    return $res;
}

function twoSum2($nums, $target) {
    $map = [];
    for($i = 0; $i < count($nums); $i++) {
        for ($j = $i+1; $j < count($nums); $j++){
            if($nums[$i] + $nums[$j] === $target)
                $res = [$i, $j];
        }
    }
    return $res;
}


function twoSum3($nums, $target) {
    $diff = $target - $nums[$i];
    if(array_key_exists($diff, $map)){
        print_r([$map[$diff], $i]);
    }
    $map[$nums[$i]] = $i;
}