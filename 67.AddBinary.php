<?php
$a = "1010";
$b = "1011";

$alen = strlen($a);
$blen = strlen($b);

$carrier = 0;

$value = '';

while($alen > 0 || $blen > 0) {

    $alen--;
    $blen--;

    $acur = ($alen >= 0) ? $a[$alen] : 0;
    $bcur = ($blen >= 0) ? $b[$blen] : 0;

    $newcur = ($acur + $bcur + $carrier);

    $carrier = ($newcur > 1) ? 1 : 0;

    $newcur = $newcur%2;

    $value = $newcur . $value;

}

if ($carrier > 0) {
    $value = $carrier . $value;
}

echo $value;