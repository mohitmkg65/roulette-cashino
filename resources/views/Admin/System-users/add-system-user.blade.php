@section('meta_title') Add System User | Construction Inventory @endsection
@extends('Admin.Layouts.layout')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="header-title ">Add System User</h4>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-long-arrow-alt-left"></i></span>Back</a>
                    </div>
                    <div class="card department-card">
                        <div class="card-body">
                            <form action="{{ route('system-user.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($user) ? $user->id : '' }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="mb-2 col-6">
                                                <label for="role" class="form-label"> Role </label>
                                                <select class="form-select" id="role" name="role">
                                                    <option value="">Select Role</option>
                                                    @if(!empty($all_roles))
                                                    @foreach($all_roles as $role)
                                                    <option value="{{ $role->id }}" {{ !empty($user->admin->role_id) && ($user->admin->role_id == $role->id) ? 'selected' : '' }}>{{ $role->role }}</option>
                                                    @endforeach
                                                    @endif
                                                </select>
                                                @if($errors->has('role'))
                                                <span class="text-danger"><b>* {{$errors->first('role')}}</b></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-2 col-6">
                                                <label for="name" class="form-label">Name</label>
                                                <input type="text" class="form-control" id="name" name="name" value="{{ !empty($user->admin->name) ? $user->admin->name : old('name') }}">
                                                @if($errors->has('name'))
                                                <span class="text-danger"><b>* {{$errors->first('name')}}</b></span>
                                                @endif
                                            </div>
                                            <div class="mb-2 col-6">
                                                <label for="mobile" class="form-label">Mobile</label>
                                                <input type="text" class="form-control" id="mobile" name="mobile" value="{{ !empty($user->mobile) ? $user->mobile : old('mobile') }}">
                                                @if($errors->has('mobile'))
                                                <span class="text-danger"><b>* {{$errors->first('mobile')}}</b></span>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-2 col-6">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="text" class="form-control" id="email" name="email" value="{{ !empty($user->email) ? $user->email : old('email') }}">
                                                <span class="text-danger d-none" id="email_existence_message"></span>
                                                @if($errors->has('email'))
                                                <span class="text-danger"><b>* {{$errors->first('email')}}</b></span>
                                                @endif
                                            </div>
                                            @if(empty($user->id))
                                            <div class="mb-2 col-6">
                                                <label for="password" class="form-label"> Password </label>
                                                <input type="text" class="form-control" id="password" name="password">
                                                @if($errors->has('password'))
                                                <span class="text-danger"><b>* {{$errors->first('password')}}</b></span>
                                                @endif
                                            </div>
                                            @endif
                                        </div>
                                        <div class="mb-3 col-12">
                                            <label for="address" class="form-label">Address</label>
                                            <textarea type="text" class="form-control" id="address" name="address">{{ !empty($user->admin->address) ? $user->admin->address : old('address') }}</textarea>
                                            @if($errors->has('address'))
                                            <span class="text-danger"><b>* {{$errors->first('address')}}</b></span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-4 add-ticket-image-upload">
                                        <div class="mt-3">
                                            <input type="file" class="dropify" name="profile_image_path" size="40" accept="image/*" data-default-file="{{ !empty($user->admin->profile_image_path) && Storage::exists($user->admin->profile_image_path) ? url('/').Storage::url($user->admin->profile_image_path) : '' }}" alt="{{ !empty($user->admin->profile_image_name) ? $user->admin->profile_image_name : '' }}" />
                                            <p class="text-center mt-2 mb-0">Profile Image</p>
                                            @if($errors->has('profile_image_path'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('profile_image_path')}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-success" type="submit"> {{ !empty($user) ? 'Update' : 'Submit' }} </button>
                                @if(empty($user)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(".system-user").addClass("active");
    $("#system-user").addClass("show");
    $(".user-list").addClass("active");
</script>

<script>
    $(document).ready(function() {
        $("#email").on("keyup", function() {
            $.ajax({
                type: "get",
                url: "{{ url('/admin/system-user/check-user-exist') }}",
                data: {
                    email: $(this).val(),
                    user_id: $("#id").val()
                },
                success: function(response) {
                    if (response.trim() == "true") {
                        $("#submit-btn").attr("disabled", true);
                        $("#email_existence_message").removeClass("d-none");
                        $("#email_existence_message").html("<b>*</b> This Email has already been taken");
                    } else {
                        $("#email_existence_message").addClass("d-none");
                        $("#email_existence_message").html("");
                        $("#submit-btn").removeAttr("disabled");
                    }
                }
            })
        })
    })
</script>
@endsection