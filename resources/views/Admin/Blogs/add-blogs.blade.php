@section('meta_title') Add Blogs | 80 Tech @endsection
@extends('Admin.Layouts.layout')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="header-title ">Add Blog</h4>
                        <a href="{{ url()->previous() }}" class="btn btn-secondary waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-long-arrow-alt-left"></i></span>Back</a>
                    </div>
                    <div class="card department-card">
                        <div class="card-body">
                            <form action="{{ route('system-user.store') }}" method="post" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" class="form-control" id="id" name="id" value="{{ !empty($system_user) ? $system_user->id : '' }}">
                                <div class="row">
                                    <div class="col-8">
                                        <div class="row">
                                            <div class="mb-2 col-6">
                                                <label for="category" class="form-label"> Category </label>
                                                <select class="form-select" id="category" name="category">
                                                    <option value="">Select Category</option>
                                                    <option value="">Design</option>
                                                    <option value="">Web Solution</option>
                                                    <option value="">AI Solution</option>
                                                </select>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="mb-2 col-12">
                                                <label for="heading" class="form-label">Heading</label>
                                                <input type="text" class="form-control" id="heading" name="heading" value="">
                                            </div>
                                        </div>
                                        <div class="row">

                                            <div class="mb-2 col-6">
                                                <label for="date" class="form-label">Date</label>
                                                <input type="date" class="form-control" id="date" name="date" value="">
                                            </div>
                                            <div class="mb-2 col-6">
                                                <label for="auther" class="form-label">Auther</label>
                                                <input type="text" class="form-control" id="auther" name="auther" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-2 col-12">
                                                <label for="slug_url" class="form-label">Slug URL</label>
                                                <input type="text" class="form-control" id="slug_url" name="slug_url" value="">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-3 col-12">
                                                <label for="" class="form-label">Description</label>
                                                <textarea type="text" rows="5" class="form-control summernote" id="" name="" value=""></textarea>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="mb-2 col-12">
                                                <label for="" class="form-label">Meta Title</label>
                                                <input type="text" class="form-control" id="" name="" value="">
                                            </div>
                                            <div class="mb-2 col-12">
                                                <label for="" class="form-label">Meta Keywords </label>
                                                <input type="text" class="form-control" id="" name="" value="">
                                            </div>
                                            <div class="mb-2 col-12">
                                                <label for="" class="form-label">Description</label>
                                                <textarea rows="3" name="" id="" class="form-control"></textarea>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="col-4 add-ticket-image-upload">
                                        <div class="mt-3">
                                            <input type="file" data-plugins="dropify" name="user_profile_image_path" size="40" accept="image/*" data-default-file="{{ !empty($system_user->user_profile_image_path) && Storage::exists($system_user->user_profile_image_path) ? url('/').Storage::url($system_user->user_profile_image_path) : '' }}" />
                                            <p class="text-center mt-2 mb-0"> Blog Image </p>

                                        </div>
                                    </div>
                                </div>

                                <button class="btn btn-success" type="submit"> {{ !empty($system_user) ? 'Update' : 'Submit' }} </button>
                                @if(empty($system_user)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
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
    $(".Blog").addClass("menuitem-active");
    $(document).ready(function() {
        $('.summernote').summernote();
    });
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