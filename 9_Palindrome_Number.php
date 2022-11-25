<?php
function isPalindrome($x) {
    $arr = str_split($x);
    $result = array_reverse($arr);

    if($arr === $result)
        return 1;
    else
        return 0;
}