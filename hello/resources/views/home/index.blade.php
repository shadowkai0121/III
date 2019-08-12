<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Ya! </h1>
    <form action="/hello">
        <!-- 增加表單輸入的時間之類的防止跨站偽造 -->
        <!-- 會增加隱藏的 token 欄位 -->
        @csrf
        name: <input type="text" name="userName" id="userName">
        <input type="submit" value="OK">
    </form>
</body>
</html>