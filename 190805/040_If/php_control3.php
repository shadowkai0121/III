<?php
$score = 95;
// if ($score >= 60 && $score < 70) {
//     echo 'D';
// } elseif ($score >= 70 && $score < 80) {
//     echo 'C';
// } elseif ($score >= 80 && $score < 90) {
//     echo 'B';
// } elseif ($score >= 90 && $score <= 100) {
//     echo 'A';
// } else {
//     echo 'Fail';
// }

// switch ($score) {
//     case $score <= 20:
//         echo 'low';
//         break;

//     case $score <= 40:
//         echo 'medium';
//         break;

//     case $score <= 60:
//         echo 'high';
//         break;

//     default:
//         echo 'severe';
//         break;
// }

switch (true) {
    case true:
        echo '3>2<br>';
        // bug? $score <= 40 會執行
        break;
    case $score <= 40:
        echo '$score <= 40';
        break;
    case $score >= 60:
        echo 'high';
        break;

    default:
        echo 'severe';
        break;
}
