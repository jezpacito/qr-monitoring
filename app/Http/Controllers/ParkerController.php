<?php

namespace App\Http\Controllers;

use App\ParkerLog;
use App\Parkers;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Hash;

class ParkerController extends Controller
{

    public function scan_qr(Request $request){
        
    $user =auth()->user()->id;
        $parker = Parkers::where('qr_number',$request->qr_number)->first();
        if($parker ==null){
            return response()->json(
                'that qr code does not exist!'
            );
        }

        $log= ParkerLog::create([
            'user_id' =>$user,
            'qr_number' =>$request->qr_number,
            'exit_dateTime' =>Carbon::now(),
        ]);

        return $log;
    }
    public function register(Request $request){
        $qr_code = Str::uuid();
     
        $parker = Parkers::create([
            'plate_number' =>$request->plate_number,
            'contact_no'=>$request->contact_no,
            'qr_number' =>$qr_code
        ]);
     
        //will generate QR
        $qr=  QrCode::size(500)
            ->format('png')
            ->generate($parker->qr_number,public_path('QR/'.$qr_code.'.png'));

        $pdf = PDF::loadView('qrCode',compact('parker'))->setPaper('legal','portrait');
        return $pdf->stream();

    }

   
}
