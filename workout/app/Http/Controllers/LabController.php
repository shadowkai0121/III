<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LabController extends Controller
{
    //
    function index(){
        return "rrrrrrrrrrrrrrrrrrrrr";
    }

    function show($id, $data){
        dd([$id, $data, 'something']);
    }

    function param(Request $request){
        dd($request->all());
    }

    function getForm(){
        return view('lab.aForm');
    }

    function postForm($id, Request $request){
        dd([$id, $request->all()]);
    }

    function xml() {
        $content = "<book><title>ooo</title><price>500</price></book>";
        return response($content, 200, 
            [
                // 沒有指定 content type 會被當作 html
                'Content-Type' => 'application/xml'
            ]);
    }

    function jsonString() {
        $arr = ["hello"=>"kerker", "anotherHello" => "Hi"];
        return response(json_encode($arr), 404, 
            [
                'Content-Type' => 'application/json'
            ]);
    }
}
