<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{
    public function login(Request $request)
    {
        if($request->isMethod('POST')){
            //$data = $request->all();

            $rules = [
                'email'=> 'required|email',
                'password'=> 'required'

            ];

            $customerMessage = [
                'email.required'=> 'Email is required',
                'email.email'=> 'Email must be an email',
                'password.required'=> 'password is required ',
            ];

            $this->validate($request,$rules,$customerMessage);

            if(Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password'], 'status' => 1]) )
            {
               return redirect('admin/dashboard');
            }
            else
            {
                return redirect()->back()->with('error_message', 'Invalid Email or Password');
            }
        }
        return view('admin.login');
    }

    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
