<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Http;


class UserController extends Controller
{
    function show(){
        $posts=['sonu','pachauri','manoj'];
       // $posts=[["title"=>"test","id"=>"1"],["title"=>"test2","id"=>"2"]];
        return view('users',['posts'=>$posts]);
    }

    function index(){
       return DB::select("select * from users");
    }
    function index2(){
        return User::all();
    }
    function getApiData(){
        
        //  $products= Http::get('https://dummyjson.com/products/1');
        //  return view('api_products',['products'=>$products]);

        $users=Http::get('https://reqres.in/api/users?page=1');
        return view('api_products',['users'=>$users['data']]);
    }

    function getHttpMethodData(Request $req){
        return $req->input();
    }
}
