<?php

namespace App\Http\Controllers;

use App\Guest;
use App\Http\Requests\GuestFormRequest;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use RealRashid\SweetAlert\Facades\Alert;

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
        $qr_code = mt_rand(100000000000, 999999999999);
        if(Guest::where('qr_code',$qr_code.'png')->exists()){
            $qr_code = mt_rand(100000000000, 999999999999);
        }

        $guest = new Guest($request->all());
        $guest->qr_code = $qr_code.'.png';
        $guest->save();

        $qr=  QrCode::size(500)
            ->format('png')
            ->generate($qr_code, public_path('QR/'.$qr_code.'.png'));

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
