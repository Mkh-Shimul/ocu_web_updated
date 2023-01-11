<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Hash;
use Session;

class AuthenticationController extends Controller
{
    public function login()
    {
        return view('authentication.login');
    }

    public function authLogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $admin = Admin::where('email', '=', $request->email)->first();

        if($admin)
        {
            if(Hash::check($request->password, $admin->password))
            {
                if($admin->isActive == true)
                {
                    $request->session()->put('loginID', $admin->id);
                    return redirect()->route('adminIndex');
                }
                else
                {
                    return back()->with('fail', 'Access is denied');
                }
            }
            else
            {
              return back()->with('fail', 'Password does not matches. Please try again');
            }
        }
        else
        {
            return back()->with('fail', 'The email is not registered. Please register first');
        }
    }

    public function logout()
    {
        if(Session::has('loginID'))
        {
            Session::pull('loginID');
            return redirect()->route('adminLogin')->with('success', 'Logout successfull.');
        }
    }

    public function register()
    {
        return view('authentication.register');
    }

    public function authRegister(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'confirm_password' => 'required',
            'admin_type' => 'required'
        ]);

        $admin = new Admin();

        $admin->username = $request->username;
        $admin->email = $request->email;
        $admin->password = Hash::make($request->password);
        $admin->confirm_password = $request->confirm_password;
        $admin->admin_type = $request->admin_type;

        $result = $admin->save();
        if($result)
        {
            return redirect()->route('adminLogin')->with('success', '!! New Admin Registraion Successfull !!');
        }
        else
        {
            return back()->with('fail', 'Somethings goes wrong. Try Again');
        }
    }
}
