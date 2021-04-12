<?php

namespace App\Http\Controllers;

use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Barryvdh\DomPDF\Facade as PDF;
class ReportController extends Controller
{

 
   public function report_all_guest(){
    Artisan::call('view:clear');

    \Illuminate\Support\Facades\Artisan::call('view:clear');
//    $guests = \App\Guest::where('created_at','>=',\Carbon\Carbon::now()->subDays(30)->toDateString())->get();
    // $guests = \App\Guest::where('created_at','>=',\Carbon\Carbon::now())->get();
    $empts =Attendance::with('employee')->get();

    $pdf = PDF::loadView('report.newly-guest',compact('empts'))->setPaper('legal','portrait');
    return $pdf->stream();
   }
}
