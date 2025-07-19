<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductController extends Controller
{

   

      public function AddProduct () {
        

         $categories = Category::all();
    return view('products.addproduct' ,compact('categories'));


        return view('products.addproduct',[]);
    
    }
    public function storeProduct(Request $request)
{
    $request->validate([
        'name' => 'required|string|max:10',
        'price' => 'required|numeric',
        'quantity' => 'required|integer',
        'description' => 'nullable|string',
        'category_id' => 'required|exists:categories,id',
    ]);

    $product = new Product();
    $product->name = $request->input('name');
    $product->price = $request->input('price');
    $product->quantity = $request->input('quantity');
    $product->description = $request->input('description');
    $product->category_id = $request->input('category_id');
    $product->save();

    return redirect()->back()->with('success', 'تم إضافة المنتج بنجاح!');
}

     
}
