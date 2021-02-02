<?php

use Illuminate\Support\Facades\Route;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;

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

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');
Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::view('/profile','profile');
Route::get('/generate123', function () {

    $file_no = mt_rand(100000000000, 999999999999).'.'.'svg';
  $qr=  QrCode::size(500)
        ->format('png')
        ->generate('ItSolutionStuff.com', public_path('QR/test.png'));


//
    $pdf = PDF::loadView('qrCode')->setPaper('legal','portrait');

    return $pdf->stream();
//    return view('qrCode');

});
Route::get('/qrCard','GuestController@card');
