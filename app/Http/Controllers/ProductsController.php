<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function getFormData(Request $req){
      $req->validate([
           'product_name'=>'required | min:5 | max:10' ,
           'product_sku'=>'required | min:5',
      ]);
      return $req->input();
    }

    public function uploadFile(Request $req){

      return $req->file('file')->store('img');
      
    }
}
