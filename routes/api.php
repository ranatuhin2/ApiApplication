<?php

use App\Http\Controllers\API\ProductController;
use Illuminate\Support\Facades\Route;


Route::group(function(){

     Route::get('/',[ProductController::class, 'index'])->name('index');
});


