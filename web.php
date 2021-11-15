<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\control;

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

Route::get('input', function () {
    return view('input');
});
Route::get('submit',[control::class,'insert_data']);
Route::get('select',[control::class,'select_data']);
Route::get('delete/{id}',[control::class,'delete_data']);
Route::get('edit/{id}',[control::class,'update_select_data']);
Route::post('update',[control::class,'update_data']);
