<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AdminLoginController extends Controller
{
    // Admin Login
    public function adminLogin(){
        if(Auth::guard('admin')->check()){
            return redirect('/admin/dashboard');
        } else {
            return view ('admin.auth.login');
        }
    }

    public function loginAdmin(Request $request){
        $data = $request->all();

        $rules = [
            'email' => 'required|email|max:255',
            'password' => 'required'
        ];
        $customMessages = [
            'email.required' => 'E-Mail Address is required',
            'email.email' => 'Please enter a valid email address',
            'email.max' => 'You are not allowed to enter more than 255 Characters',
            'password.required' => 'Password is required'
        ];
        $this->validate($request, $rules, $customMessages);


        if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect('/admin/dashboard');
        } else {
            Session::flash('error_message', 'Invalid Email or Password');
            return redirect()->back();
        }
    }

    // Admin Dashboard
    public function adminDashboard(){
        return view ('admin.dashboard');
    }

    // Admin Logout
    public function adminLogout(){
        Auth::guard('admin')->logout();
        Session::flash('info_message', 'Logout Successful');
        return redirect('/admin/login');
    }


}
