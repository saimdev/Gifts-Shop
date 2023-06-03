<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataBase;

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

Route::get('user/{email}', [DataBase::class, 'carousel']);
Route::view('/', 'login');
Route::get('shop/{email}', [DataBase::class, 'showshop']);
Route::view('signup', 'signup');
Route::post('register', [DataBase::class, 'registration']);
Route::get('signin', [DataBase::class, 'login']);
Route::get('/{email}/product/{flowername}', [DataBase::class, 'showproduct']);
Route::post('addnewproduct', [DataBase::class, 'addnewproduct']);
Route::get('cart/{email}', [DataBase::class, 'showcart']);
Route::view('admin', 'admin');
Route::get('{email}/delete/{name}', [DataBase::class, 'deletefromcart']);
Route::post('/{email}/addtocart/{name}/{price}/{image}', [DataBase::class, 'addtocart']);
Route::get('checkout/{email}/{total}', [DataBase::class, 'checkout']);
Route::get('logout/{email}', [DataBase::class, 'logout']);
Route::view('logout', 'login');
Route::get('list', [DataBase::class, 'showlist']);
Route::get('update/{name}', [DataBase::class, 'showupdatepage']);
Route::get('delete/{name}', [DataBase::class, 'deleteproduct']);
Route::get('updateproduct/{name}', [DataBase::class, 'updateproduct']);
