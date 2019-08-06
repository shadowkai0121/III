<?php

$sData = '一二三四五';

$test = mb_substr($sData, 1, 3, "utf-8");

// echo $test;

$n = 3;
$char = "0";
$digit = 4;
// output: 0003
function leftpad_1($n, $char, $digit)
{
    $tmp = '';
    for ($i = 0; $digit - strlen($n); $i++) {
        $tmp = $tmp . $char;
    }
    $tmp .= $n;
    echo $tmp . "<br>";
}

leftpad_1($n, "*", 5);

function leftpad_2($n)
{
    $n += 10000;
    echo substr($n, 1, strlen($n)) . "<br>";
}

leftpad_2($n);
