<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


//localhost:8000/api/rfid


Route::post('/test/rfid',function (){
//qr number
    dd(request()->all());

});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
