<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
class FirstController extends Controller
{
       
    public function MainPage () {
        $result = category::all();
        return view('welcome' , ['categories' => $result]);
    
    }
     

    public function  GetDataFromProduct ($catid = null) {

        if ($catid) {
           $result = product::where('category_id' , $catid) ->get();
           return view('product' , ['products' => $result ,]);
      
      
        } else {
      
      
           $result = product::all();
           return view('product' , ['products' => $result ,]);
        }
      
       }


     public function GetDataFromCategory () {
        $products = product::all();   
         $categories = category::all();
        return view('category', ['categories' => $categories , 'products' => $products]);
    }

}
