<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
// this use to link with database (one)
use Illuminate\Support\Facades\DB;
use App\Models\Category;
use App\Models\Product;





Route::get('/', [FirstController::class , 'MainPage'] );


Route::get('/product/{catid?}' , [FirstController::class , 'GetDataFromProduct'] );


Route::get('/category' , [FirstController::class , 'GetDataFromCategory'] );


