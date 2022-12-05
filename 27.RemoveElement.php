<?php
$nums = [0,1,2,2,3,0,4,2];
$val = 2;

foreach ($nums as $k => $v){
    if($v == $val)
        unset($nums[$k]);
}

print_r($nums);