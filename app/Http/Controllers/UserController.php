<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function show(){
        $posts=['sonu','pachauri','manoj'];
       // $posts=[["title"=>"test","id"=>"1"],["title"=>"test2","id"=>"2"]];
        return view('users',['posts'=>$posts]);
    }
}
