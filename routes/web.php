<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
use App\Http\Controllers\ProductController;
// this use to link with database (one)
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;




Route::get('/', [FirstController::class , 'MainPage'] );


Route::get('/product/{catid?}' , [FirstController::class , 'GetDataFromProduct'] );


Route::get('/category' , [FirstController::class , 'GetDataFromCategory'] );


Route::get('/addproduct' , [ProductController::class , 'AddProduct']);

Route::post('/storeproduct', [ProductController::class, 'storeProduct'])->name('products.store');

Route::get('/delete/{id}', [FirstController::class, 'destroy'])->name('product.delete');

Route::get('review', [FirstController::class, 'review'])->name('product.review');
Route::POST('addreview', [FirstController::class, 'addreview'])->name('add.review');
Route::post('/search', [FirstController::class, 'search']);



