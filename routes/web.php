<?php

use App\Http\Controllers\ProxyController;
use Illuminate\Support\Facades\Route;

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

    $response = null;

    return view('proxy', compact('response'));
});


Route::get('/proxy', ProxyController::class);
//Route::get('/proxy', function () {
//    $response = "";
//
//    return view('proxy', compact('response'));
//});
