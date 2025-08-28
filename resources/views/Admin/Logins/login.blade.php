<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>80 Tech | Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="shortcut icon" href="{{URL::asset('assets/images/logo/favicon.png')}}">
    <link href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('assets/css/fontawesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{ URL::asset('assets/css/toastr.min.css') }}" />
    <link rel="stylesheet" href="{{ URL::asset('assets/css/common.css') }}" />

    <style>
        .card {
            width: 450px;
            box-shadow: 0px 4px 25px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>

<body class="loading authentication-bg authentication-bg-pattern">
    <div class="container h-100">
        <div class="d-flex justify-content-center align-items-center h-100 flex-column">
            <div class="text-center mb-4">
                <a href="{{url('/')}}">
                    <img src="{{URL::asset('assets/images/logo/logo.png')}}" alt="logo" height="70">
                </a>
                <h2 class="header mt-2">Admin Login</h2>
            </div>
            <div class="card">
                <div class="card-header text-center">
                    <h4 class="text-uppercase m-0 py-1">Sign In</h4>
                </div>
                <div class="card-body p-4">
                    <form action="{{ route('login') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input class="form-control" type="email" id="email" name="email" placeholder="Enter your email" required>
                            @if($errors->has('email'))
                            <span class="text-danger"><b>* {{$errors->first('email')}}</b></span>
                            @endif
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <div class="input-box-pass">
                                <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password" required>
                                <div class="pass-show"><i class="fa-regular fa-eye fa-sm"></i></div>
                            </div>
                            @if($errors->has('password'))
                            <span class="text-danger"><b>* {{$errors->first('password')}}</b></span>
                            @endif
                        </div>

                        <div class="mb-3 d-grid text-center">
                            <button class="btn btn-primary" type="submit"> Log In </button>
                        </div>
                    </form>

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="{{ url('admin/forget-password') }}" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{URL::asset('admin_panel/Common/common.js')}}"></script>
    <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="{{ URL::asset('assets/js/validate.min.js') }}"></script>
    <script src="{{ URL::asset('assets/js/toastr.min.js') }}"></script>

    <script>
        toastr.options = {
            "closeButton": true,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
        }

        @if(Session::has('success'))
            toastr.success("{{ Session::get('success') }}");
        @endif

        @if(Session::has('info'))
            toastr.info("{{ Session::get('info') }}");
        @endif

        @if(Session::has('warning'))
            toastr.warning("{{ Session::get('warning') }}");
        @endif

        @if(Session::has('error'))
            toastr.error("{{ Session::get('error') }}");
        @endif
    </script>
</body>
</html>