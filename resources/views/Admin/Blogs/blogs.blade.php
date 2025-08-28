@section('meta_title') Blogs | 80 Tech @endsection
@extends('Admin.Layouts.layout')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="mt-0 header-title">Blogs List</h4>
                        <a href="{{ url('admin/add-blogs') }}" class="btn btn-success waves-effect waves-light add-btn"><span class="btn-label"> <i class="fas fa-plus "></i></span>Add</a>
                    </div>
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="cims_data_table" class="table table-bordered table-bordered dt-responsiv w-100 ">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th>Sr No</th>
                                        <th>Image</th>
                                        <th>Heading</th>
                                        <th>Category</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="{{URL::asset('front/images/blog-img-1.png')}}" width="60" alt=""></td>
                                        <td>The Future of UI/UX: Trends Shaping Digital Experiences</td>
                                        <td>Design</td>
                                        <td><a href="javascript:void(0)" data-id="9" data-table="blogs" data-flash="Status Changed Successfully!" class="change-status fs-3"><i class="fa fa-toggle-on tgle-on status_button" aria-hidden="true" title=""></i></a></td>
                                        <td><a href="https://projects.m-staging.in/Zealwise-Testing/admin/blogs/edit/9"> <button type="button" data-id="9" class="btn btn-warning btn-xs" title="Edit"><i class="mdi mdi-pencil"></i></button></a>
                                            <a href="javascript:void;" data-id="9" data-table="blogs" data-flash="Data Deleted Successfully!" class="btn btn-danger btn-xs delete btn-xs" title="Delete"><i class="mdi mdi-trash-can"></i></a>
                                        </td>
                                    </tr>
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
@endsection