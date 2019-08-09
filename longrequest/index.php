<?php
header('Access-Control-Allow-Origin: *');
header('Content-Encoding', 'chunked');
header('Transfer-Encoding', 'chunked');
header('Connection', 'keep-alive');

echo " " . "\r\n";

// 清除緩衝
// 立刻送出資料
// 沒有這樣寫的話程式會等到執行結束才送出資料
// ob_flush();
// flush();

$response = array(
    "event" => "progress",
    "data" => 0,
);

for ($i = 1; $i <= 10; $i++) {
    sleep(rand(1, 3));
    $response["data"] = rand(1, 10);
    echo json_encode($response) . "\r\n";
    ob_flush();
    flush();
}