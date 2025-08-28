<?php

namespace App\Http\Controllers\Admin\Login;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models as Models; 
use Carbon\Carbon; 
use Illuminate\Support\Str;
use App\Mail\MailForgetPasswordLink;
use DB; 
use Mail; 
use Hash;

class ForgotPasswordController extends Controller
{
    public function index(){
        return view('Admin.Forget-passwords.forget-password');
    }

    public function store_token(Request $request){
        $request->validate([
            'email' => 'required|email',
        ]);
        $token = Str::random(64);

        if(!Models\User::where('role', 'admin')->where('email', $request->email)->exists()){
            return back()->with('error', 'Sorry, this mail is not associated with us!');
        }
       
        $password_reset_tokens_user = DB::table('password_reset_tokens')->where('email', $request->email)->first();
        if(!empty(isset($password_reset_tokens_user->email) && $password_reset_tokens_user->email)){
            DB::table('password_reset_tokens')->where('email', $request->email)->update([
                'email' => $request->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
            ]);
        } else {
            DB::table('password_reset_tokens')->insert([
                'email' => $request->email, 
                'token' => $token, 
                'created_at' => Carbon::now()
            ]);
        }

        $user = Models\User::where('role', 'admin')->where('email',$request->email)->with('admin')->orderBy('id', 'desc')->first();

        $data = [
            'user_name' => !empty($user->admin->full_name) ? $user->admin->full_name : '',
            'url' => url('admin/reset-password/create/'. $token)
        ];

        $mail_data = [
            'recipient_emails' => [$request->email ?? ''],
            'cc_recipient_emails' => [],
            'sender_email' => 'support@meigma.ai',
            'subject' => 'Reset Password',
            'html_body' => view('Email-templates.forgot', compact('data'))->render(),
        ];

        if(empty($this->sendEmailByAwsSesClient($mail_data))){
            return redirect()->back()->with('success', 'Mail send successfully');
        } else {
            return redirect()->back()->with('error', $this->sendEmailByAwsSesClient($mail_data));
        }

        return back()->with('success', 'We have e-mailed your password reset link!');
    }

    public function create($token) { 
        return view('Admin.Forget-passwords.reset-password', compact('token'));
    }
  
    public function match_token(Request $request, $role){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8|max:30|confirmed',
            'password_confirmation' => 'required'
        ], [
            'password_confirmation.required' => 'The confirm password field is required.',
            'password_confirmation.confirmed' => 'The password confirmation does not match.'
        ]);

        if(!Models\User::where('role', $role)->where('email',$request->email)->exists()){
            return back()->with('error', 'Sorry, this mail is not associated with us!');
        }
        $is_token_exist = DB::table('password_reset_tokens')->where(['email' => $request->email, 'token' => $request->token])->exists();
        if(!$is_token_exist){
            return back()->withInput()->with('error', 'Invalid token!');
        }
        $user = Models\User::where('role', $role)->where('email', $request->email)->update(['password' => Hash::make($request->password)]);
        DB::table('password_reset_tokens')->where(['email'=> $request->email])->delete();
        return redirect('/admin')->with('success', 'Your password has been changed!');
    }
}
