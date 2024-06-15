<?php

namespace App\Http\Controllers;

use App\Http\Requests\AuthRequest;
use App\Mail\ResetPasswordMail;
use App\Models\PasswordReset;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;


class AuthController extends Controller
{

    public function index(){

        if(!Auth::check()){
            return view('auth.login');
        }else{
            return redirect()->route('auth.dashboard');
        }


    }
    public function registration(){
        return view('auth.registration');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255', // Adjust the max length as needed
            'email' => 'email',
            'number' => 'integer',
            'password' => 'required'
        ]);

        // Hash the password before storing it
        $request->merge(['password' => bcrypt($request->input('password'))]);

        $user = User::create($request->all());

        if ($user) {
            return redirect()->route('login-form')->with('success','successfully registered ');
        } else {
            echo "error";
        }
    }

    public function login(Request $request){
//        dd($request);
        if (Auth::attempt(['email'=>$request->email, 'password'=>$request->password],true)){
            return redirect()->route('auth.dashboard');
//            echo  "logind ";
        }
        else{
            return redirect()->back()->with('error','email or password does not match');
        }
    }


    public function dashboard(){
        return view('auth.dashboard');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('login-form');
    }


    // forgot password

    public function forget(){
        return view('auth.forget');
    }

//    public function forget_pass(Request $request){
//
//        try {
//            // Find the user by email
//            $user = User::where('email', $request->email)->get();
//
//            // If user exists
//            if($user){
//                // Generate a random token
//                $token = Str::random(40);
//
//                // Construct the password reset URL
//                $url = URL::to('/reset-password?token='.$token);
//
//                // Data to be sent in the email
//                $data = [
//                    'url' => $url,
//                    'email' => $request->email,
//                    'title' => 'Password reset',
//                    'body' => 'Please click on the below link to reset your password.'
//                ];
//
//                // Send password reset email
//                Mail::to($data['email'])->send(new ResetPasswordMail($data));
//                $dateTime = Carbon::now()->format('Y-m-d H:i:s');
//
//   // Update or create password reset record
//                PasswordReset::updateOrCreate(
//                    ['email' => $request->email],
//                    [
//                        'token' => $token,
//                        'created_at' => $dateTime
//                    ]
//                );
//                return back()->with('success', 'Password reset link has been sent to your email.');
//            } else {
//                return back()->with('error', 'Email does not exist.');
//            }
//        } catch (\Exception $e) {
//            return back()->with('error', $e->getMessage());
//        }
//    }





//    public function reset_password(Request $request){
//        $resetData = PasswordReset::where('token', $request->token)->first();
////       dd($resetData);
//        if ($resetData) {
//            // Find the user by email
//            $user = User::where('email', $resetData->email)->first();
////            dd($user);
//            // Pass the user's email to the reset_passwordView
//            return view('auth.reset_passwordView', ['email' => $user->email]);
//        } else {
//            return 'Invalid token.';
//        }
//    }


//    public function store_password(Request $request){
////        dd($request);
//        $request->validate([
//            'password' => 'required|confirmed|string|min:6',
//        ]);
//
//        // Find the user by email
//        $user = User::where('email', $request->email)->get();
////dd($user);
//        if (!$user) {
//            return redirect()->back()->with('error', 'User not found');
//        }
//
//        // Update the user's password
//        $user->password = Hash::make($request->password);
//        $user->save();
//
//        // Delete the password reset record
//        PasswordReset::where('email', $user->email)->delete();
//
//        return redirect()->route('login-form')->with('success', 'Your password is successfully reset');
//    }



    public function forget_pass(Request $request) {
        try {
            // Find the user by email
            $user = User::where('email', $request->email)->get();

            // If user exists
            if ($user) {
                // Generate a random token
                $token = Str::random(40);

                // Construct the password reset URL
                $url = URL::to('/reset-password?token=' . $token);

                // Data to be sent in the email
                $data = [
                    'url' => $url,
                    'email' => $request->email,
                    'title' => 'Password reset',
                    'body' => 'Please click on the below link to reset your password.'
                ];

                // Send password reset email
                Mail::to($data['email'])->send(new ResetPasswordMail($data));
                $dateTime = Carbon::now()->format('Y-m-d H:i:s');

                // Update or create password reset record
                PasswordReset::updateOrCreate(
                    ['email' => $request->email],
                    [
                        'token' => $token,
                        'created_at' => $dateTime
                    ]
                );
                return back()->with('success', 'Password reset link has been sent to your email.');
            } else {
                return back()->with('error', 'Email does not exist.');
            }
        } catch (\Exception $e) {
            return back()->with('error', $e->getMessage());
        }
    }


    public function reset_password(Request $request) {
        if (!isset($request->token)) {
            return response("Page expired", 400);
        }

        $resetData = PasswordReset::where('token', $request->token)->first();
        if ($resetData) {
            $user = User::where('email', $resetData->email)->first();

            if ($user) {
                return view('auth.reset_passwordView', ['user' => $user]);
            } else {
                return response("User not found", 404);
            }
        } else {
            return response("Invalid token", 400);
        }
    }

    public function store_password(Request $request) {
        $request->validate([
            'password' => 'required|confirmed|string|min:6',
            'id' => 'required|integer'
        ]);

        // Log the request to see if the correct ID is being passed
        Log::info('store_password request', $request->all());

        // Find the user by ID
        $user = User::find($request->id);
   dd($user);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }

        // Update the user's password
        $user->password = Hash::make($request->password);
        $user->save();

        // Delete the password reset record
        PasswordReset::where('email', $user->email)->delete();

        return redirect()->route('login-form')->with('success', 'Your password is successfully reset');
    }





}
