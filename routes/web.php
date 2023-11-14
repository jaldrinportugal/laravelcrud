<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderDetailController;
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


//Route::get('/', function () {
  //  return view('index');
    
//});

Route::get('/',[ProductController::class,'index'])->middleware('auth')->name('product');

Route::get('/supplier',[SupplierController::class,'index'])->middleware('auth')->name('supplier');
Route::get('/category',[CategoryController::class,'index'])->middleware('auth')->name('category');
Route::get('/order',[OrderController::class,'index'])->middleware('auth')->name('order');
Route::get('/customer',[CustomerController::class,'index'])->middleware('auth')->name('customer');
Route::get('/orderdetail',[OrderDetailController::class,'index'])->middleware('auth')->name('orderdetail');
Route::get('/login',[AuthController::class,'index'])->name('login');



Route::post('/login',[AuthController::class,'login'])->name('login.submit');
Route::get('/logout',[AuthController::class,'logout'])->middleware('auth')->name('logout');
Route::get('/register',[AuthController::class,'registration'])->name('registration');
Route::post('/register',[AuthController::class,'register'])->name('register');

