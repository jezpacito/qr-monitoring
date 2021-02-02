<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class GuestController extends Controller
{
    public function register(){
    //register guest infos
    }

    public function card(){
        $qr= QrCode::size(500)
            ->format('svg')
            ->generate('1234', public_path('QR/file-svg.svg'));
        dd($qr);

//        $pdf = PDF::loadView('home')->setPaper('legal','portrait');
    }

}
