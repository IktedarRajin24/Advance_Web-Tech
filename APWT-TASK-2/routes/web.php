<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\StudentController;

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

Route::get('/home', [PagesController::class, 'home'])->name('home');

Route::get('/products', [PagesController::class, 'products'])->name('products');

Route::get('/ourTeam', [PagesController::class, 'ourTeam'])->name('ourTeam');

Route::get('/aboutUs', [PagesController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contactUs', [PagesController::class, 'contactUs'])->name('contactUs');

Route::get('/user/{id}', function($id){
    return "<b>The passed id is ".$id."</b>";
});

Route::get('/studentList', [StudentController::class, 'studentList'])->name('studentList');

Route::get('/studentCreate', [StudentController::class, 'studentCreate'])->name('studentCreate');
Route::post('/studentCreate', [StudentController::class, 'studentCreatesubmitted'])->name('studentCreate');

Route::get('/login', [StudentController::class, 'login'])->name('login');
Route::post('/login', [StudentController::class, 'loginsubmitted'])->name('login');

Route::get('/contact', [StudentController::class, 'contact'])->name('contact');
Route::post('/contact', [StudentController::class, 'contactsubmitted'])->name('contact');