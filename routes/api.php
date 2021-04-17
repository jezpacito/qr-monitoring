<?php

use App\Attendance;
use App\Http\Resources\AttendaceResource;
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



Route::get('/timeIn/rfid/{rfid}/temperature/{temp}','UserController@timeIn');

// Route::get('/timeIn/qr/{qr}/temperature/{temp}','UserController@timeIn_qr');
// Route::get('/timeIn/qr/{qr}/','UserController@timeIn_qr');
Route::get('scanned/qr/logs',function(){
    $guests = Attendance::where('user_id',null)->with('guest')
    ->latest()
    ->get();
    return response()->json([
      'data'=>  AttendaceResource::collection($guests)
    ]);
});
Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
