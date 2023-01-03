<?php
$nums1 = [1,2,3,0,0,0];
$nums2 = [2,5,6];
$m = 3;
$n =3;
$nums1 = array_slice($nums1, 0, $m);
$nums2 = array_slice($nums2, 0, $n);
$result = array_merge($nums1, $nums2);
sort($result);
print("<pre>".print_r($result,true)."</pre>");