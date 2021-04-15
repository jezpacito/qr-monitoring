<?php

namespace App\Http\Controllers;

use App\Attendance;
use App\Guest;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class UserController extends Controller
{
    /**
     * 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function timeIn_qr($qr){

        $guest = Guest::where('qr_number',$qr)->first();
        if($guest == null){
            return response()->json([
                'cant find staff with that qr'
            ]);
        }
        $attendance = Attendance::create([
            'datetime_In' => Carbon::now(),
            'guest_id' => $guest->id,
        ]);

     
         echo "<script>window.close();</script>";

        // return response()->json([
        //     $attendance,
        //     'message' => 'time in success!'
        // ]);
    }

    public function timeIn($rfid,$temp){

        $emp = User::where('rfid_uuid',$rfid)->first();
        if($emp == null){
            return response()->json([
                'cant find staff with that uuid'
            ]);
        }
        $attendance = Attendance::create([
            'datetime_In' => Carbon::now(),
            'user_id' => $emp->id,
            'temperature' =>$temp
        ]);

        return response()->json([
            $attendance,
            'message' => 'time in success!'
        ]);
    }

    public function register(){
        return view('user.create-admin');
    }
    public function show_guest_profile(Guest $guest){
      return view('people.show',compact('guest'));
    }

    public function list_people(){
        $people = Guest::latest()->paginate(6);

        return view('people.index',compact('people'));
    }
    public function employee()
    {
        $users = User::role('staff')->paginate(6);
        return view('user.index-emp', compact('users'));
    }
    public function admin()
    {
        $users = User::role('admin')->latest()->paginate(6);
        return view('user.index', compact('users'));
    }
    public function index()
    {
         $users = User::paginate(6);
        return view('user.index', compact('users'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $input = $request->all();
        $input['password'] = bcrypt($request->password);
        $user = User::create($input);
        if ($request->admin =='admin')
        {
            $user->assignRole('admin');
            return redirect()->back()->with('success', 'Admin Created Successfully!');

        }else{
            $user->assignRole('staff');
            return redirect()->route('user.employee')->with('success', 'Created Successfully!');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('user.show', compact('user'));
    }

    public function userDetails($id){
        $user = User::findOrFail($id);
        return view('user.userShow', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *timeIn
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $user = User::findOrFail($id);
        $user->update($request->all());

        return redirect()->back()->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->back();
    }
}
