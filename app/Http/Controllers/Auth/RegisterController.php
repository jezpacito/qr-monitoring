<?php

namespace App\Http\Controllers\Auth;

use App\Guest;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Auth\Events\Registered;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use RealRashid\SweetAlert\Facades\Alert;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/user';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('web');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function showRegistrationForm()
    {
//        if (!Auth::check()){
//            return 'not allowed';
////            return redirect()->back()->with('error', 'NOT ALLOWED!');
//        }
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));

//        $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
            ? new Response('', 201)
            : redirect($this->redirectPath())->withSuccess('added!');
    }

    public function register_guest(Request $request){
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

        redirect()->back()->with('success','success');

        $pdf = PDF::loadView('qrCode',compact('guest'))->setPaper('legal','portrait');
//        dd($pdf->stream());

    }
}
