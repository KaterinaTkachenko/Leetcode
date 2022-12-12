<?php
$arr = [3,6,7,8,10];
$target = 5;
$result = 0;
foreach ($arr as $k=>$v){
    if($v === $target)
        $result = $k;
    else if($target>$v){
        $result = $k+1;
    }
}

echo $result;