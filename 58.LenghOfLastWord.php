<?php
$s = "   fly me   to   the moon  ";
$lastWord = explode(' ', trim($s)); // return array of strings
$lastWord = end($lastWord); // get the last element of array
echo strlen($lastWord);