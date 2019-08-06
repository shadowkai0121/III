<?php

function showStart($qty, $what = "*")
{
    $qty = ($qty > 3) ? $qty : 3;
    $qty = ($qty <= 20) ? $qty : 20;
    $result = '';

    for ($i = 0; $i < $qty; $i++) {
        for ($j = $qty - $i; $j > 0; $j--) {
            if ($i === 0) {
                break;
            }
            $result .= "&nbsp;&nbsp;";
        }
        for ($j = 0; $j < $i * 2 - 1; $j++) {
            $result .= $what;
        }
        $result .= "<br>";
    }

    return $result;
}

$star = showStart(10000);
echo $star;

// function test($x)
// {
//     return $x + 1;
// }

// $p = "test";
// echo $p(10);

function hi()
{
    echo "hi";
}

function hello()
{
    echo "hello";
}

$userInput = "hi";
$txt = $userInput;
if ($txt) {
    $txt();
}
