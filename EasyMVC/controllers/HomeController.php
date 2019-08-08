<?php
class HomeController extends Controller
{
    public function index()
    {
        echo "home page of HomeController";
    }

    public function hello($name)
    {
        $user = $this->model("User");
        $user->name = $name[0];

        $this->view("Home/hello", $user);
    }

}