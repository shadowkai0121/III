<?php

function printSomething($data){
    var_dump($data);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
@session("test");
    {{-- 接收資料 --}}
<h1>{{ $test[1] }}! {{ $who }} </h1>
<?php printSomething($test);?>
</body>
</html>
