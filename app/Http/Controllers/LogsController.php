<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\User;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function employee_logs(){
//        $users = User::with('attendances')->latest()->get();

        $users = Attendance::with('employee')
            ->latest()
            ->get();

        return view('logs.employee',compact('users'));
    }
    public function guest_logs(){
        return view('logs.guest');
    }
}
