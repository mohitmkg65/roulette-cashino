@section('meta_title') Chip Value | Admin | {{ config('constant.project.name')  }}  @endsection
@extends('Admin.Layouts.layout')

@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <h4 class="header-title ">{{ !empty($chip->id) ? 'Edit' : 'Add' }} Chip Value</h4>
                </div>

                <div class="col-4">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{route('chip_value.store')}}" method="post" id="chip-value-form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{ !empty($chip->id) ? $chip->id : '' }}">
                                
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="value" class="">Value</label>
                                        <input type="text" class="form-control" name="value" id="value" placeholder="Enter Chip Value" value="{{ !empty($chip->value) ? $chip->value : '' }}">
                                        @if($errors->has('value'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('value')}}</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-12">
                                        <label for="color" class="">Color</label>
                                        <input type="text" class="form-control" name="color" id="color" placeholder="Enter Chip Value" value="{{ !empty($chip->color) ? $chip->color : '' }}">
                                        @if($errors->has('color'))
                                            <span class="text-danger"><b>*</b> {{$errors->first('color')}}</span>
                                        @endif
                                    </div>
                                </div>
                                <br>
                                <button type="submit" class="btn btn-success"> {{ !empty($chip) ? 'Update' : 'Submit' }} </button>
                                @if(empty($chip)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="casino_data_table" class="table table-bordered table-bordered dt-responsiv w-100 ">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th width="15%">Sr No</th>
                                        <th>Chip</th>
                                        <th>Color</th>
                                        <th width="15%">Status</th>
                                        <th width="15%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    
                                </tbody>
                            </table>
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
    $(".chip").addClass("active");
</script>
@endsection