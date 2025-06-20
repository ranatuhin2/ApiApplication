<?php

use App\Http\Controllers\API\ProductController;
<<<<<<< HEAD
use Illuminate\Support\Facades\Route;
=======
>>>>>>> refs/remotes/origin/main


Route::group(function(){

     Route::get('/',[ProductController::class, 'index'])->name('index');
});


