<?php

use Illuminate\Support\Facades\Artisan;
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

//Route::get('/', function () {
//    Route::get('/guest/registration','GuestController@guest_form_regis');
//
//});\




Route::get('/sample-report',function (){
    Artisan::call('view:clear');

    \Illuminate\Support\Facades\Artisan::call('view:clear');
//    $guests = \App\Guest::where('created_at','>=',\Carbon\Carbon::now()->subDays(30)->toDateString())->get();
    $guests = \App\Guest::where('created_at','>=',\Carbon\Carbon::now())->get();

    dd($guests);
    $pdf = PDF::loadView('report.newly-guest',compact('guests'))->setPaper('legal','portrait');
    return $pdf->stream();
});

Route::get('/','GuestController@guest_form_regis');
//Route::view('login-v2','auth.login-v2');

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController');


Route::get('/people', 'UserController@list_people');

Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::view('/profile','profile');

Route::get('/employee','UserController@employee')->name('user.employee');

Route::get('/admin','UserController@admin');

Route::get('/list/registered','GuestController@list_guest');


Route::post('/register/guest','GuestController@register')->name('guest');

Route::get('/qrCard','GuestController@download_stream_pdf');

