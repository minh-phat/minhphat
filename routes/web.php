<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController2;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('list',[ProductController::class, 'index']); // meaning if get list in http , it will move to class is index in productController
Route::get('add',[ProductController::class, 'add']);// meaning if get add in http , it will move to class is add in productController
Route::post('save',[ProductController::class, 'save']);
Route::post('save',[ProductController::class, 'save']);
Route::get('edit/{id}',[ProductController::class, 'edit']);
Route::post('update',[ProductController::class, 'update']);
Route::get('delete/{id}',[ProductController::class, 'delete']);

Route::get('/',[ProductController2::class, 'index']);
Route::get('products',[ProductController2::class, 'getProducts']);
Route::get('login',[ProductController2::class, 'login']);

Route::get('registration',[ProductController2::class, 'registration']);

?>