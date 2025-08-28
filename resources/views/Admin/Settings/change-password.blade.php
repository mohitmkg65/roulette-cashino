@section('meta_title') Change Password | {{ config('constant.project.user.admin') }} | {{ config('constant.project.name')  }}  @endsection
@extends('Admin.Layouts.layout')

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="header">Change Password</h3>
    </div>
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="header">Password Details</h5>
                </div>
                <div class="card-body">
                    <form action="{{ route('change-password') }}" method="post" id="change-password-form">
                        @csrf
                        <div class="col-12 mb-3">
                            <label for="old_password" class="form-label">Old Password</label>
                            <div class="input-box-pass">
                                <input type="password" class="form-control" id="old_password" name="old_password" placeholder="Enter old Password">
                                <div class="pass-show"><i class="fa-regular fa-eye fa-sm"></i></div>
                            </div>
                            @if($errors->has('old_password'))
                                <span class="text-danger error"> {{$errors->first('old_password')}}</span>
                            @endif
                        </div>
                        <div class="col-12 mb-3">
                            <label for="new_password" class="form-label">New Password</label>
                            <div class="input-box-pass">
                                <input type="password" class="form-control" id="new_password" name="new_password" placeholder="Enter New Password">
                                <div class="pass-show"><i class="fa-regular fa-eye fa-sm"></i></div>
                            </div>
                            @if($errors->has('new_password'))
                                <span class="text-danger error"> {{$errors->first('new_password')}}</span>
                            @endif
                        </div>
                        <div class="col-12 mb-3">
                            <label for="new_password_confirmation" class="form-label">Confirm Password</label>
                            <div class="input-box-pass">
                                <input type="password" class="form-control" id="new_password_confirmation" name="new_password_confirmation" placeholder="Confirm Password" />
                                <div class="pass-show"><i class="fa-regular fa-eye fa-sm"></i></div>
                            </div>
                            @if($errors->has('new_password_confirmation'))
                                <span class="text-danger error"> {{$errors->first('new_password_confirmation')}}</span>
                            @endif
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-success"> Submit </button>
                            <button type="reset" class="btn btn-danger"> Cancel </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(".setting").addClass("active");
    $("#setting").addClass("show");
    $(".change-password").addClass("active");
</script>
@endsection