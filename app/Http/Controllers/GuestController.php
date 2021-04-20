<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Http\Requests\GuestFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
class GuestController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }




    public function guest_form_regis(){
        return view('guest-register');
    }
    public function register(GuestFormRequest $request){
    
        $qr_code = Str::uuid();

        // env('APP_ENV') == 'production'
        // ? $uri = 'https://cdbtms.herokuapp.com/api/timeIn/qr/'.$qr_code
        // : $uri = 'http://localhost:8000/api/timeIn/qr/'.$qr_code;

        // $guest = new Guest($request->all());
        // $guest->qr_code = $qr_code.'.png';
        // $guest->qr_number = $qr_code;
        // $guest->qr_uri = $uri;
        // $guest->save();

        

      
        $qr=  QrCode::size(500)
            ->format('png')
            ->generate($guest->qr_uri, public_path('QR/'.$qr_code.'.png'));

        $pdf = PDF::loadView('qrCode',compact('guest'))->setPaper('legal','portrait');
        return $pdf->download();

    }

    public function download_stream_pdf(){
        $file_no = mt_rand(100000000000, 999999999999).'.'.'svg';
        $qr=  QrCode::size(500)
            ->format('png')
            ->generate('ItSolutionStuff.com', public_path('QR/test.png'));

        $pdf = PDF::loadView('qrCode')->setPaper('legal','portrait');
        $pdf->download();
        return $pdf->stream();
    }

}
