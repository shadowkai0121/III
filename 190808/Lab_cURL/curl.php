<?php

header("content-type: text/html; charset=utf-8");

// 初始化 curl
$ch = curl_init();

// 設定參數
// curl_setopt($ch, CURLOPT_URL, "https://tw.appledaily.com/");
$url = $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
$url = "http://" .
str_replace(basename(__FILE__), "login/secret.php", $url);

echo $url, "<hr>";

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_HEADER, 1);

// 使用 POST 方法
$postData = array(
    "txtUserName" => "Chien",
    "txtPassword" => "password",
    "btnOK" => "OK",
);

echo "hi";

curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

// CURLOPT_COOKIEJAR 指定如何接收儲存 Cookie
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie.txt");


// 執行
$output = curl_exec($ch);

$info = curl_getinfo($ch);

// 關閉
curl_close($ch);

// 報告測試結果
if (preg_match("!Location: (.*)!i", $output, $matches)) {
    echo "網站要求重導到 $matches[1]\n";
} else {
    echo "不必重導\n";
}
echo "<hr>";

// foreach ($info as $key => $value) {
//     echo $key . " : " . $value . "<br>";
// }
// echo htmlspecialchars($output);

// echo file_get_contents("https://tw.appledaily.com/");

// cURL 可以模擬 GET 以外的動作