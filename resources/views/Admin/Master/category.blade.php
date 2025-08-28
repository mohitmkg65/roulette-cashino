@extends('Admin.Layouts.layout')
@section('content')
<div class="content-page">
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="header-title ">Add Category</h4>
                    </div>
                </div>


                <div class="col-4">
                    <div class="card department-card">
                        <div class="card-body">

                            <form action="{{route('geraral.settings.store')}}" method="post" id="general_settings_contact_form" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="id" value="{{!empty($general_settings->id)?$general_settings->id:''}}">
                                <div class="row">
                                    <div class="mb-2 col-12">
                                        <label for="" class="form-label">Category Name</label>
                                        <input type="text" class="form-control" name="" id="" placeholder="Enter Category Name" value="">

                                    </div>
                                </div>



                                <button type="submit" name="contact_settings" id="submit_btn" class="btn btn-success"> {{ !empty($general_settings) ? 'Update' : 'Submit' }} </button>
                                @if(empty($general_settings)) <button type="reset" class="btn btn-danger"> Cancel </button> @endif

                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-8">
                    <!-- <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="mt-0 header-title">System User</h4>
                        <a href="{{ url('admin/system-user/add') }}" class="btn btn-success waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-plus "></i></span>Add</a>
                    </div> -->
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="cims_data_table" class="table table-bordered table-bordered dt-responsiv w-100 ">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th width="10%">Sr No</th>
                                        <th>Category Name</th>
                                        <th width="10%">Status</th>
                                        <th width="10%">Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Design</td>
                                        <td><a href="javascript:void(0)" data-id="12" data-table="benefits_cards" data-flash="Status Changed Successfully!" class="change-status fs-3"><i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title=""></i></a></td>
                                        <td><a href="javascript:void;" data-id="12" data-table="benefits_cards" data-flash="Data Deleted Successfully!" class="btn btn-danger btn-xs delete btn-xs" title="Delete"><i class="mdi mdi-trash-can"></i></a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>

                </div>
            </div> <!-- container-fluid -->
        </div>
    </div>
    @endsection

    @section('script')
    <script>
        $(".").addClass("menuitem-active");
        $(".general-setting").addClass("menuitem-active");
    </script>
    @endsection