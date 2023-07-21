<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use App\Models\Admin;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function login(Request $request)
    {
        if ($request->isMethod('post')) {
            $validate = Validator::make($request->all(), [
                'email' => 'required|email',
                'password' => 'required',

            ], [
                'email.required' => 'Email is required',
                'email.email' => 'Please enter the valid email',
                'password.required' => 'Password is required',
            ]);
            if ($validate->fails()) {
                return back()->withErrors($validate->errors())->withInput();
            } else {
                $data = $request->all();
                if (Auth::guard('admin')->attempt(['email' => $data['email'], 'password' => $data['password']])) {
                    return redirect('admin/dashboard')->with('success_msg', 'Login Successfully');
                } else {
                    return redirect('admin/login')->with('error_msg', 'Invalid Email or Password');
                }
            }
        } else {
            return view('admin.login');
        }
    }

    //update admin password 
    public function updateAdminPassword(Request $request)
    {
        if ($request->isMethod('post')) {
            $validate = Validator::make($request->all(), [
                'current_password' => 'required',
                'password' => 'required|confirmed',
                'password_confirmation' => 'required'
            ], [
                'current_password' => 'Current Password field is required',
                'password' => 'New Password field is required',
                'password_confirmation' => 'Confirm Password field is required',
            ]);
            if ($validate->fails()) {
                return redirect()->back()->withErrors($validate->errors())->withInput();
            } else {

                $data = $request->all();
                //check if current password is correct or not 
                if (Hash::check($data['current_password'], Auth::guard('admin')->user()->password)) {
                    //check if new password and confirm password match or not
                    if ($data['password'] == $data['password_confirmation']) {
                        //update password 
                        $update_password = Admin::where('id', Auth::guard('admin')->user()->id)
                            ->update(['password' => bcrypt($data['password'])]);
                        return redirect()->back()->with('success_msg', 'Password Updated successfully.');
                    } else {
                        return redirect()->back()->with('error_msg', 'New password and confirm password is not matched !');
                    }
                } else {
                    return redirect()->back()->with('error_msg', 'Current Password is incorrect !');
                }
            }
        } else {
            return view('admin.update_admin_password');
        }
    }


    //update admin Details 
    public function updateAdminDetails(Request $request)
    {
        if ($request->isMethod('post')) {
            $validate = Validator::make($request->all(), [
                'admin_name' => 'required',
                'mobile' => 'required',

            ], [
                'admin_name.required' => 'Name is required',
                'mobile.required' => 'Mobile number is required',
            ]);
            if ($validate->fails()) {
                return back()->withErrors($validate->errors())->withInput();
            } else {
                $data = $request->all();
                Admin::where('id' , Auth::guard('admin')->user()->id)
                        ->update(['name' =>$data['admin_name'] , 'mobile' =>$data['mobile']]);
                return redirect()->back()->with('success_msg', 'Admin Details Updated Successfully.');

            }
        }
        else{
            return view('admin.update_admin_details');

        }
    }

    //check current password 
    public function CheckCurrentPassword(Request $request)
    {
        $data = $request->all();
        if (Hash::check($data['current_password'], Auth::guard('admin')->user()->password)) {
            return 'true';
        } else {
            return 'false';
        }
    }



    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect('admin/login')->with('success_msg', 'Logout Successfully');
    }
}
