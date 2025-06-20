<?php

use App\Http\Controllers\API\ProductController;


Route::group(function(){

     Route::get('/',[ProductController::class, 'index'])->name('index');
});


