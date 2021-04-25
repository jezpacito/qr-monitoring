<?php

use App\ParkerLog;
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




Route::get('/sample-report','ReportController@report_all_emp');
Route::get('/report/guest','ReportController@report_all_guest');


Route::get('/download',function (){

});

//Route::view('login-v2','auth.login-v2');

\Illuminate\Support\Facades\Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('register/driver','GuestController@guest_form_regis');

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

//new route
Route::post('/register/parker','ParkerController@register')->name('parker');

Route::get('/parker/logs',function(){
    $logs = ParkerLog::with('user')->latest()->get();
    
    return view('parking_logs.index',compact('logs'));
});

Route::get('scanner-test', function (){
    return view('parking_logs.autosave');
});

Route::post('contact-form','ParkerController@scan_qr');

Route::prefix('logs')->group(function (){
    Route::get('employee','LogsController@employee_logs');
    Route::get('guest','LogsController@guest_logs');
});

});
