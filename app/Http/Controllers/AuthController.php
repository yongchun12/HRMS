<?php

#This page use for login Authentication
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Mail\ForgotPasswordMail;
use Auth;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Testing\Fluent\Concerns\Has;

class AuthController extends Controller
{
    public function index(Request $request)
    {
        #Return to login.blade.php
        return view('login');
    }

    public function forget_password(Request $request)
    {
        #Return to forget_password.blade.php
        return view('forget_password');
    }

    public function forget_password_post (Request $request){

        #Validation (Check their email is exist or not based on their email and count)
        $count = User::where('email', '=', $request->email)->count();

        // count is used to count the number of data in the database
        // If the data is exist, it will return 1
        if($count > 0) {
            $user = User::where('email', '=', $request->email)->first();

            #Random Password Range
            $random_pass = rand(11111111, 99999999);

            #After make random password, we need to update the password in database
            $user->password = Hash::make($random_pass);
            $user->save();

            $user->random_pass = $random_pass;

            #Send Email
            Mail::to($user->email)->send(new ForgotPasswordMail($user));

            return redirect()->back()->with('success', 'Password has been sent to your email');

        } else {
            return redirect()->back()->with('error', 'Invalid Email');
        }

    }

    public function login_post(Request $request)
    {
        #Validation
        if(Auth::attempt(['email' => $request -> email, 'password' => $request -> password], true)) {

            #Check the user is HR or not
            // 1 = HR, 0 = Employee
            if(Auth::User()->is_role == '1'){
                return redirect()->intended('admin/dashboard');
            }else if (Auth::User()->is_role == '0'){
                return redirect()->intended('employee/dashboard');
            } else {
                return redirect('/')->with('error', 'This User is not available');
            }
        } else {
            #Print Error Message
            return redirect()->back()->with('error', 'Invalid Email or Password');
        }

    }

    //Logout Function
    public function logout()
    {
        Auth::logout();
        return redirect(url('/'));
    }

}

?>
