@section('meta_title') Forgot Password @endsection
@extends('Email-templates.Layouts.mail_layout')

@section('content') 
<div style="font-size: 14px; margin-top: 0px;padding: 20px;">
    <p>Dear {{ $data['user_name'] }},</p>
    <p>We received a request to reset the password for your account associated with this email address. To proceed, please verify your email by clicking the button below:</p>
    <div style="text-align: center; margin: 20px;">
        <a href="{{ $data['url'] }}" style="display: inline-block; padding: 10px 20px; background-color: #301934; color: #ffffff; text-decoration: none; border-radius: 4px;">Change Password</a>
    </div>
    <p>If you didn’t request this, please ignore this email or contact our <a href="mailto:{{ config('constant.project.email') }}" style="text-decoration: none; color:blue;">support team</a>.</p>
    <p>Thank you,</p>
    <p>Team {{ config('constant.project.name') }}</p>
</div>
@endsection