<?php
function romanToInt($s) {
    $result = 0;
    $map = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,

        // special for diy
        'v' => 4,
        'x' => 9,
        'l' => 40,
        'c' => 90,
        'd' => 400,
        'm' => 900,
    ];

    $special = [
        'IV' => 'v',
        'IX' => 'x',
        'XL' => 'l',
        'XC' => 'c',
        'CD' => 'd',
        'CM' => 'm',
    ];
    foreach ($special as $k => $v) {
        $s = str_replace($k, $v, $s); // MCMXCIV = Mmcv
    }
    $array = str_split($s);
    foreach ($array as $item){
        $result += $map[$item];
    }
    return $result;
}