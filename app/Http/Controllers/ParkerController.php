<?php

namespace App\Http\Controllers;

use App\Parkers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
class ParkerController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function register(Request $request){
    
        $qr_code = Str::uuid();

        $check_student = Student::where('id_number',$request->school_id)->first();
        if($check_student ===null){
          return redirect()->back()->with('info', 'Student is not Enrolled!');
        }
        $parker = Parkers::create([
            'school_id' =>$request->school_id,
            'plate_number' =>$request->plate_number,
            'vehicle_type'=>$request->vehicle_type,
            'qr_number' =>$qr_code
        ]);
        

        $qr=  QrCode::size(500)
            ->format('png')
            ->generate($parker->school_id,public_path('QR/'.$qr_code.'.png'));

        $pdf = PDF::loadView('qrCode',compact('parker'))->setPaper('legal','portrait');
        return $pdf->stream();

    }

   
}
