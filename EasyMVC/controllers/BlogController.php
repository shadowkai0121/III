<?php
class BlogController extends Controller
{

    function list($post) {
        echo $post[0];
    }
}