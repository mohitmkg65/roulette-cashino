<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('meta_title')</title>
</head>
<body style="font-family: 'Roboto', Arial, sans-serif; margin: 0; padding: 0; background-color: #f4f4f4; color: #333;">
    <div style="width: 600px; margin: 0px auto; background-color: #ffffff; padding: 0px; border-radius: 8px; border: 1px solid #e0e0e0;">
        <header style="display: flex; background-color: #301934; color: white; padding: 20px; align-items: center; border-radius: 8px 8px 0 0;">
            <img style="width: 50px; margin-right: 20px;" src="{{ URL::asset('assets/images/logo/logo.png') }}" alt="logo">
            <div style="display: flex; justify-content: space-between; align-items: center; width: 500px;">
                <h1 style="margin: 3px 0; font-size: 36px;">{{ config('constant.project.name') }}</h1>
                <div style="text-align: right;">
                    <h1 style="margin: 3px 0; font-size: 14px;"><a href="tel:{{ config('constant.project.phone') }}" style="text-decoration: none; color:white;">{{ config('constant.project.phone') }}</a></h1>
                    <!-- <h1 style="margin: 3px 0; font-size: 14px;"><a href="{{ config('constant.project.site') }}" style="text-decoration: none; color: white">{{ config('constant.project.site') }}</a></h1> -->
                    <h1 style="margin: 3px 0; font-size: 14px;"><a href="mailto:{{ config('constant.project.email') }}" style="text-decoration: none; color:white;">{{ config('constant.project.email') }}</a></h1>
                </div>   
            </div>
        </header>
            
        @yield('content')
            
        <footer style="text-align: center; font-size: 12px; background-color: #f4f4f4; padding: 20px;">
            <p style="margin: 0;">Copyright © 2025 {{ config('constant.project.name') }}. All rights reserved.</p>
            <p style="margin: 0;">
                <a href="mailto:{{ config('constant.project.email') }}" style="text-decoration: none; color: #333333;">{{ config('constant.project.email') }}</a> | 
                <a href="{{ config('constant.project.site') }}" style="text-decoration: none; color: #333333;">{{ config('constant.project.site') }}</a>
            </p>
        </footer>
    </div>
</body>
</html>
