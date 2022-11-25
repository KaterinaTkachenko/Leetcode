<?php
function isValid($s) {
    $result = [];
    $valid = true;
    $array = str_split($s);
    if(count($array)<2) $valid = false;
    for ($i = 0; $i < count($array); $i++) {
        if(($array[$i] === '(') || ($array[$i] === '[') || ($array[$i] === '{'))
            $result[] = $array[$i];
        else if(($array[$i] === ')') && (end($result) === '(')){
            array_pop($result);
        }
        else if(($array[$i] === ']') && (end($result) === '[')){
            array_pop($result);
        }
        else if(($array[$i] === '}') && (end($result) === '{')){
            array_pop($result);
        }
        else $valid = false;
    }
    if(count($result)>0) $valid = false;
    return $valid;
}