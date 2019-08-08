<?php

class Controller
{
    public function model($model)
    {
        require_once "models/$model.php";
        // 工廠!!
        return new $model();
    }

    public function view($view, $data = array())
    {
        require_once "views/$view.php";
    }
}