<?php

// $arr = [1, 2, 3, 4];
// $read = var_dump($arr);
// echo $read;
// echo gettype($read);
// print_r($arr);

$a = ["1", "2", "3"];
foreach ($a as $k => $x) {
    // 無法直接修改值
    // $x = "3";
    $a[$k] = "3";
}

print_r($a);
