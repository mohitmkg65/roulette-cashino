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
        <div class="text-center">
            <a href="{{url('/admin')}}">
                <img src="{{URL::asset('assets/images/logo/logo.png')}}" alt="logo" height="70">
            </a>
            <h2 class="header mt-2">Career Path</h2>
        </div>
        <div class="card p-4" style="width: 450px">
            <div class="card-body p-3">
                <div class="text-center mb-4">
                    <h4 class="text-uppercase mt-0">Forgot Password</h4>
                    <p class="mb-40px">Enter the email associated with your account and we'll send password reset link to you email</p>
                </div>

                <form action="{{ route('admin.forget_password.store_token', ['admin']) }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="form-label">Email address</label>
                        <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                        @if($errors->has('email'))
                            <span class="text-danger error"><b>* {{$errors->first('email')}}</b></span>
                        @endif
                    </div>

                    <div class="d-grid text-center">
                        <button class="btn btn-primary" type="submit"> Send Link </button>
                    </div>
                </form>
                
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
        $(".pass-show").on('click', function() {
            var passwordId = $(this).siblings();
            if (passwordId.attr("type") === "password") {
                passwordId.attr("type", "text");
                $(this).find("i").removeClass("fa-eye")
                $(this).find("i").addClass("fa-eye-slash")
            } else {
                passwordId.attr("type", "password");
                $(this).find("i").addClass("fa-eye")
                $(this).find("i").removeClass("fa-eye-slash")
            }
        })
    </script>

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
