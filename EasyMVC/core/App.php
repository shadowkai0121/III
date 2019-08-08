<?php

class App
{
    public function __construct()
    {
        $url = $this->parseUrl();

        $controllerName = "{$url[0]}Controller";
        // 被 index 呼叫，相對路徑會轉移到根目錄
        // 被誰呼叫就以誰為主
        require_once "controllers/$controllerName.php";

        $controller = new $controllerName();
        $method = "{$url[1]}";

        if (!method_exists($controller, $method)) {
            return;
        }

        // 去除陣列內的控制器項，剩下的就是參數
        unset($url[0]);
        unset($url[1]);

        // 整理參數陣列，原本參數在 $url[2] 之後變成 $params[0] 開始算
        $params = $url ? array_values($url) : array();

        call_user_func(array($controller, $method), $params);
    }

    public function parseUrl()
    {
        if (isset($_GET["url"])) {
            // 去除最右邊的 /
            $url = rtrim($_GET["url"], "/");
            // 爆炸(x) 轉換成陣列
            $url = explode("/", $url);
            return $url;
        }
    }
}