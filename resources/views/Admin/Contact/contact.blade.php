@section('meta_title') Contact | 80 Tech @endsection
@extends('Admin.Layouts.layout')
@section('content')
<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="mb-2 justify-content-between d-flex align-items-center">
                        <h4 class="mt-0 header-title">Contact Enquiry</h4>
                    </div>
                    <div class="card">
                        <div class="card-body table-responsive department-card">
                            <table id="cims_data_table" class="table table-bordered table-bordered dt-responsiv w-100 ">
                                <thead class="table-light">
                                    <tr role="row">
                                        <th >Sr No</th>
                                        <th >First Name</th>
                                        <th >Last Name</th>
                                        <th >Mobile No</th>
                                        <th >Service</th>
                                        <th >Email</th>
                                        <th >Message</th>
                                        <th >Action</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Akash</td>
                                        <td>Mali</td>
                                        <td>9565326545</td>
                                        <td>Service 1</td>
                                        <td>akash@gmail.com</td>
                                        <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, quae.</td>
                                        <td>
                                        <a href="javascript:void;" data-id="6" data-table="contacts__enqs" data-flash="Data Deleted Successfully!" class="btn btn-danger btn-xs delete btn-xs" title="Delete"><i class="mdi mdi-trash-can"></i></a>
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