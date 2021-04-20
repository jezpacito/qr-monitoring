<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Guest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class LogsController extends Controller
{


    
    public function scan_qr(){
        // dd(request()->qr_number);

      
        $guest = Guest::where('qr_number',request()->qr_number)->first();       
        $logs = Attendance::create([
            'guest_id' =>$guest->id,
            'datetime_In' => Carbon::now()
        ]);

        return $logs;
       
    }

    public function employee_logs(){
//        $users = User::with('attendances')->latest()->get();

        // $users = Attendance::where('guest_id',null)->with('employee')
        //     ->latest()
        //     ->get();

        return view('logs.employee');
    }
    public function guest_logs(){

        // $guests = Attendance::where('user_id',null)->with('guest')
        // ->latest()
        // ->get();
        return view('logs.guest');
    }
}
