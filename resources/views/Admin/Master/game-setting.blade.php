@section('meta_title') Game Setting | Admin | {{ config('constant.project.name')  }}  @endsection
@extends('Admin.Layouts.layout')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4 class="header-title ">{{ !empty($game_setting->id) ? 'Edit' : 'Add' }} Game Setting</h4>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('game_setting.store')}}" method="post" id="game-setting-value-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ !empty($game_setting->id) ? $game_setting->id : '' }}">
                                
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">total time</label>
                                        <input type="text" class="form-control" name="total_time" id="total_time" placeholder="Enter Total Time" value="{{ !empty($game_setting->total_time) ? $game_setting->total_time : '' }}">
                                        @if($errors->has('total_time'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('total_time')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">Game Time</label>
                                        <input type="text" class="form-control" name="game_time" id="game_time" placeholder="Enter Game Time" value="{{ !empty($game_setting->game_time) ? $game_setting->game_time : '' }}">
                                        @if($errors->has('game_time'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('game_time')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">Result Time</label>
                                        <input type="text" class="form-control" name="result_time" id="result_time" placeholder="Enter Result Time" value="{{ !empty($game_setting->result_time) ? $game_setting->result_time : '' }}">
                                        @if($errors->has('result_time'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('result_time')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-success"> {{ !empty($game_setting) ? 'Update' : 'Submit' }} </button>
                                @if(empty($game_setting)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
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
<script src="{{ URL::asset('admin_panel/controller_js/cn_chips.js')}}"></script>

<script>
    $(".master").addClass("active");
    $("#master").addClass("show");
    $(".referral-bonus").addClass("active");
</script>
@endsection