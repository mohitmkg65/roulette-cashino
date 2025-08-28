<link rel="shortcut icon" href="{{ !empty(App\Helpers\Helpers\Helper::getVisualImages()->favicon_image_path) && Storage::exists(App\Helpers\Helpers\Helper::getVisualImages()->favicon_image_path) ? url('/').Storage::url(App\Helpers\Helpers\Helper::getVisualImages()->favicon_image_path) : URL::asset('assets/images/logo/favicon.png') }}">
<link href="{{URL::asset('assets/css/main.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/common.css') }}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/fontawesome.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/datatable.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/dropify.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/jquery-textarea.css')}}" rel="stylesheet"/>
<link href="{{ URL::asset('assets/css/toastr.min.css') }}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/select2.min.css')}}" rel="stylesheet"/>
<link href="{{URL::asset('assets/css/quill.snow.css')}}" rel="stylesheet"/>

@yield('css')