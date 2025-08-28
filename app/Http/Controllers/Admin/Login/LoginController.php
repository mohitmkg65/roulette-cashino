<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades as Facades;
use App\Models as Models;

class LoginController extends Controller
{
    public function index(){ 
        return !empty(Facades\Session::has('RouletteCasinoAdmin*%')) ? redirect('admin/dashboard') :  view('Admin.Logins.login'); 
    }

    public function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $user_data = array(
            'email' => $request->get('email'),
            'password' => $request->get('password')
        );  
        
        $user = Models\User::where('email', $user_data['email'])->first();
        if($user && Facades\Hash::check($user_data['password'], $user->password)){
            Facades\Auth::guard('admin')->login($user);
            if(Facades\Auth::guard('admin')->user()->status == 'inactive') {
                Facades\Auth::logout();
                Facades\Session::flush();
                return redirect('/admin')->with('error', 'Contact To Admin For Login.');
            } else {
                $userId = Facades\Auth::guard('admin')->user()->id;  
                Models\User::where('id', $userId)->update([
                    'last_login' => date('Y-m-d H:i:s'),
                ]);
                Facades\Session::put('RouletteCasinoAdmin*%', $userId);
                return redirect('admin/dashboard')->with('success', 'Login Successfully!');
            }
        } else {          
            return redirect('/admin')->with('error', 'Invalid Login Details!');;
        }
    }

    public function logout(Request $request)
    {
        Facades\Auth::logout();
        Facades\Session::flush();
        return redirect('/admin')->with('success', 'Logout Successfully!');
    }

    public function view_change_password(){
        return view('Admin.Settings.change-password');
    }

    public function change_password(Request $request){
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|max:30|confirmed',
            'new_password_confirmation' => 'required'
        ], [
            'new_password_confirmation.required' => 'The confirm password field is required',
            'new_password.confirmed' => 'The confirm password does not match',
        ]);  
        
        $user = Models\User::find(auth()->guard('admin')->user()->id);
        if(Facades\Hash::check($request->new_password, $user->password)){
            return redirect('/admin/change-password')->with('error','New password must not same as last password!');
        }
        if($user && Facades\Hash::check($request->old_password, $user->password)){
            $user->update(['password' => Facades\Hash::make($request->new_password)]);
            Facades\Auth::logout();
            Facades\Auth::guard('admin')->logout();
            Facades\Session::forget('RouletteCasinoAdmin*%');
            return redirect('/admin')->with('success', 'Password changed successfully!');
        } else {          
            return redirect('/admin/change-password')->with('error', 'Invalid old password!');
        }
    }
}
