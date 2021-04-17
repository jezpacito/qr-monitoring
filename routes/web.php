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
//localhost:8000/test/temp/body_temp?asasasa
Route::post('test/temp',function (){
    dd(request()->all());
    \App\Temperature::create(['body_temp' =>request()->body_temp]);
});


Route::get('scanner',function(){
    return view('scanner');
});

//qr scan form
Route::get('/test',function(){
    return view('qr.form');
});
//record 
Route::post('qr-log','LogsController@scan_qr');

Route::get('/sample-report','ReportController@report_all_emp');
Route::get('/report/guest','ReportController@report_all_guest');


Route::get('/download',function (){

});

Route::get('/','GuestController@guest_form_regis');
//Route::view('login-v2','auth.login-v2');

\Illuminate\Support\Facades\Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/user', 'UserController');

Route::get('/userDetails/{id}','UserController@userDetails');

Route::get('/people', 'UserController@list_people');

Route::get('/guest/show/{guest}', 'UserController@show_guest_profile');

Route::get('dataTableUSer', 'UserController@dataTable')->name('dataTableUser');

Route::view('/profile','profile');

Route::get('/employee','UserController@employee')->name('user.employee');

Route::get('/admin','UserController@admin');

Route::get('/list/registered','GuestController@list_guest');

Route::get('/add/admin','UserController@register');

Route::post('/register/guest','GuestController@register')->name('guest');

Route::get('/qrCard','GuestController@download_stream_pdf');

Route::get('send/test','SendMailController@send');

Route::prefix('logs')->group(function (){
    Route::get('employee','LogsController@employee_logs');

});
Route::get('/guest-logs','LogsController@guest_logs');