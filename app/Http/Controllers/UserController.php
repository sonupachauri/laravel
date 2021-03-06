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
    function userLogin(Request $req){
        //return $req->input();

        $inputData=$req->input('username');
        if($req->input()){
             $req->validate([
                'username'=>'required | min:10 | max:20',
                'password'=>'required | min:5 | max:10',
             ]) ;
             $req->session()->put('user',$inputData);
             return \redirect('profile');
        }
        return view('login');

    }

    function list(){
        //$userData= User::all();
        $userData= User::paginate(20);
        return \view('list',['users'=>$userData]);
    }

    function userSaveData(Request $req){
        $user=new User;
        
        if($req->input()){
            $req->validate([
                'name'=>'required',
                'email'=>'required',
                'address'=>'required'
             ]) ;
             $user->name=$req->name;
             $user->email=$req->email;
             $user->address=$req->address;
             $userSaved= $user->save();
             if($userSaved){
                return \redirect('userslist');
             }      
        }
    }

    function userShow($id){
        $Editdata= User::find($id);
        return \view('list',['showData'=>$Editdata]);
    }

    function userDelete($id){
        $deleteData=User::find($id);
        $deleteData->delete();
           return \redirect('userslist');
    }

    function userUpdate(Request $req) {
        $updateData=User::find($req->input('id'));
        $updateData->name=$req->name;
        $updateData->email=$req->email;
        $updateData->address=$req->address;
        $updateData->save();
        return redirect('userslist');
    }
}
