<?php
session_start();
$sWarn = "";
if (isset($_POST["btnOK"])) {
    $name = $_POST["txtUserName"];
    if ($name) {
        $_SESSION["name"] = $name;
        header("Location: demo0806_hello.php");
    } else {
        $sWarn = "no name!!";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>IndexPage</title>
</head>
<body>
   <form method="post">
        Your name:
        <input type="text" name="txtUserName" id="txtUserName">
        <input type="submit" name="btnOK" value="Send">
        <br>
        <?=$sWarn?>
   </form>
</body>
</html>
