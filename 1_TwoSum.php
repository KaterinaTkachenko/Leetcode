<?php
function twoSum($nums, $target) {
    $current = 0;
    $result = [];
    for($i=0; $i<count($nums); $i++){
        for($j=$current; $j<count($nums); $j++){
            $sum = $nums[$current]+$nums[$i+1];
            if($sum === $target){
                $result = [$current, $i+1];
            }
        }
        $current++;
    }
    return $result;
}