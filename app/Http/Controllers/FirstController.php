<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\Review;
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

    public function destroy($id){

        $product= Product::find($id);
        $product->delete();
        return redirect()->back()->with('success', 'Product deleted successfully');
    }

    public function review(){
         $reviews = Review::all();
         return view ('reviews', ['reviews' => $reviews]);

    }

    public function addreview(Request $request)

    {

        $request->validate([
    'name' => 'required|string|max:255',
    'phone' => 'required|regex:/^[0-9]{10,15}$/',
    'email' => 'required|email|max:255',
    'subject' => 'required|string|max:255',
    'message' => 'required|string|max:1000',
]);


      $review= new Review();

      $review->name = $request->name;
       $review->phone = $request->phone;
        $review->email = $request->email;
         $review->subject = $request->subject;
          $review->message = $request->message;
          $review->save();

          return redirect()->back()->with('success', 'تم إضافة المنتج بنجاح!');

    }


    public function search(Request $request){

        $products = Product::where('name', 'LIKE', '%' . $request->searchkey. '%')->get();


        return view ('product',['products'=>$products]);
    }


}
