<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>@yield('meta_title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('Admin.Includes.header')
    <style>
        .marginL{
            margin-left: 0rem !important;
        }
    </style>
</head>

<body>
    @include('Admin.Includes.navbar')
    <main class="main-wrapper">
        <input type="hidden" value="{{url('/')}}" id="base_url" />
        <input type="hidden" value="{{ auth()->guard('admin')->user()->role }}" id="login_user_role" />
        <section class="d-flex">
            <aside class="sidebar invisible-scrollbar">
                @include('Admin.Includes.sidebar')
            </aside>
            <article class="page-content">
                <div class="marginL">
                    @yield('content')   
                </div>
                @include('Admin.Includes.footer')
            </article>
        </section>
    </main>
    @include('Admin.Includes.scripter')
</body>

</html>