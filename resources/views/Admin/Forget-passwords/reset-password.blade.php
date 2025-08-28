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
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-6 col-xl-4">
                <div class="text-center">
                    <a href="{{ url('/admin') }}">
                        <img src="{{URL::asset('assets/images/logo/logo.png')}}" alt="" height="50" class="mx-auto">
                    </a>
                    <h2 class="header mt-2 ">Career Path</h2>
                </div>
                <div class="card">
                    <div class="card-body p-4">
                        <div class="text-center mb-4">
                            <h4 class="text-uppercase mt-0">Change Password</h4>
                        </div>

                        <form action="{{ route('admin.reset_password.match_token', ['admin']) }}" method="post">
                            @csrf
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="email" name="email" value="{{ old('email') }}" placeholder="Enter your email">
                                @if($errors->has('email'))
                                    <span class="text-danger error"><b>* {{$errors->first('email')}}</b></span>
                                @endif
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-box">
                                    <input class="form-control" type="password" id="password" name="password" placeholder="Enter your password">
                                    <div class="pass-show"><i class="fa fa-eye"></i></div>
                                </div>
                                @if($errors->has('password'))
                                    <span class="text-danger error"><b>* {{$errors->first('password')}}</b></span>
                                @endif
                            </div>

                            <div class="mb-4">
                                <label for="confirm-password" class="form-label">Confirm Password</label>
                                <div class="input-box">
                                    <input class="form-control" type="password" id="confirm-password" name="password_confirmation" placeholder="Confirm Password">
                                    <div class="pass-show"><i class="fa fa-eye"></i></div>
                                </div>
                                @if($errors->has('password_confirmation'))
                                    <span class="text-danger error"><b>* {{$errors->first('password_confirmation')}}</b></span>
                                @endif
                            </div>

                            <div class="d-grid text-center">
                                <button class="btn btn-primary" type="submit"> Change Password </button>
                            </div>
                        </form>
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