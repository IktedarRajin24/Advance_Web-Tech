<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SignupController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [PagesController::class, 'home'])->name('home');
Route::get('/login', [loginController::class, 'login'])->name('login');
Route::post('/login', [loginController::class, 'loginsubmitted'])->name('login');
Route::get('/signUp', [SignupController::class, 'signUp'])->name('signUp');
Route::post('/signUp', [SignupController::class, 'signUpSubmitted'])->name('signUp');


Route::get('/productlist', [ProductController::class, 'productlist'])->name('productlist');
Route::get('/addtocart/{id}',[ProductController::class,'addtocart'])->name('product.addtocart');
Route::get('/emptycart',[ProductController::class,'emptycart'])->name('product.emptycart');
Route::get('/cart',[ProductController::class,'mycart'])->name('product.mycart');