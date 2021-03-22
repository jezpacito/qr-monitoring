<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class LogsController extends Controller
{
    public function employee_logs(){
        $users = User::role('admin')->latest()->paginate(10);
        return view('logs.employee');
    }
    public function guest_logs(){
        return view('logs.guest');
    }
}
