@section('meta_title') Referral Bonus | Admin | {{ config('constant.project.name')  }}  @endsection
@extends('Admin.Layouts.layout')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4 class="header-title ">{{ !empty($referral_bonus->id) ? 'Edit' : 'Add' }} Referral Bonus</h4>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('referral_bonus.store')}}" method="post" id="referral-bonus-value-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ !empty($referral_bonus->id) ? $referral_bonus->id : '' }}">
                                
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">Referrer Bonus</label>
                                        <input type="text" class="form-control" name="referrer_bonus" id="referrer_bonus" placeholder="Enter Referrer Bonus Value" value="{{ !empty($referral_bonus->referrer_bonus) ? $referral_bonus->referrer_bonus : '' }}">
                                        @if($errors->has('referrer_bonus'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('referrer_bonus')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">Referee Bonus</label>
                                        <input type="text" class="form-control" name="referee_bonus" id="referee_bonus" placeholder="Enter Referee Bonus Value" value="{{ !empty($referral_bonus->referee_bonus) ? $referral_bonus->referee_bonus : '' }}">
                                        @if($errors->has('referee_bonus'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('referee_bonus')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">Agent Commission</label>
                                        <input type="text" class="form-control" name="agent_commission" id="agent_commission" placeholder="Enter Agent Commission Value" value="{{ !empty($referral_bonus->agent_commission) ? $referral_bonus->agent_commission : '' }}">
                                        @if($errors->has('agent_commission'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('agent_commission')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <br>
                                <button type="submit" class="btn btn-success"> {{ !empty($referral_bonus) ? 'Update' : 'Submit' }} </button>
                                @if(empty($referral_bonus)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
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