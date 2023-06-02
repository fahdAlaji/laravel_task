<?php

use App\Http\Controllers\ProdactController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('add_prodact');
});

Route::get('/home/{id}',function($id){
    return view('home',['a'=>$id]);
});


Route::get('index',[ProdactController::class,'index']
//function(){
//return view('add');}
);
Route::post('add',[ProdactController::class,'store'])->name('add');

Route::get('create',[ProdactController::class,'create']);

