@section('meta_title')Carrer Path | Visual Settings @endsection
@extends('Admin.Layouts.layout')

@section('content')
<div class="container">
    <div class="page-header">
        <h3 class="header">Visual Settings</h3>
    </div>
    <div class="card">
        <div class="card-body">
            <form action="{{ route('visual.settings.store') }}" method="post" id="visual_settings_form" enctype="multipart/form-data">
                @csrf
                <input type="hidden" id="id" name="id" value="{{ !empty($visual_settings->id) ? $visual_settings->id : '' }}">
                <div class="row mb-3">
                    <div class="col-3">
                        <input type="file" class="dropify" name="logo_image_path" size="40" accept="image/*" data-default-file="{{ !empty($visual_settings->logo_image_path) && Storage::exists($visual_settings->logo_image_path) ? url('/').Storage::url($visual_settings->logo_image_path) : '' }}" alt="{{ !empty($visual_settings->logo_image_name) ? $visual_settings->logo_image_name : '' }}" />
                        <p class="text-center mt-2 mb-0">Full Logo ( logo with text )</p>
                        @if($errors->has('logo_image_path'))
                        <span class="text-danger"><b>*</b> {{$errors->first('logo_image_path')}}</span>
                        @endif
                    </div>
                    <div class="col-3">
                        <input type="file" class="dropify" name="mini_logo_image_path" size="40" accept="image/*" data-default-file="{{ !empty($visual_settings->mini_logo_image_path) && Storage::exists($visual_settings->mini_logo_image_path) ? url('/').Storage::url($visual_settings->mini_logo_image_path) : '' }}" alt="{{ !empty($visual_settings->mini_logo_image_path) ? $visual_settings->mini_logo_image_path : '' }}" />
                        <p class="text-center mt-2 mb-0">Mini Logo ( logo without text )</p>
                        @if($errors->has('mini_logo_image_path'))
                        <span class="text-danger"><b>*</b> {{$errors->first('mini_logo_image_path')}}</span>
                        @endif
                    </div>
                    <div class="col-3">
                        <input type="file" class="dropify" name="favicon_image_path" size="40" accept="image/*" data-default-file="{{ !empty($visual_settings->favicon_image_path) && Storage::exists($visual_settings->favicon_image_path) ? url('/').Storage::url($visual_settings->favicon_image_path) : '' }}" alt="{{ !empty($visual_settings->favicon_image_path) ? $visual_settings->favicon_image_path : '' }}" />
                        <p class="text-center mt-2 mb-0">Favicon Logo ( logo for browser tab )</p>
                        @if($errors->has('favicon_image_path'))
                        <span class="text-danger"><b>*</b> {{$errors->first('favicon_image_path')}}</span>
                        @endif
                    </div>
                    <div class="col-3">
                        <input type="file" class="dropify" name="email_logo_image_path" size="40" accept="image/*" data-default-file="{{ !empty($visual_settings->email_logo_image_path) && Storage::exists($visual_settings->email_logo_image_path) ? url('/').Storage::url($visual_settings->email_logo_image_path) : '' }}" alt="{{ !empty($visual_settings->email_logo_image_path) ? $visual_settings->email_logo_image_path : '' }}" />
                        <p class="text-center mt-2 mb-0">Email Logo ( logo appear in mails )</p>
                        @if($errors->has('email_logo_image_path'))
                        <span class="text-danger"><b>*</b> {{$errors->first('email_logo_image_path')}}</span>
                        @endif
                    </div>
                </div>
                <button class="btn btn-submit" type="submit"> {{ !empty($visual_settings) ? 'Update' : 'Submit' }} </button>
            </form>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    $(".setting").addClass("active");
    $("#setting").addClass("show");
    $(".visual-setting").addClass("active");
</script>
@endsection