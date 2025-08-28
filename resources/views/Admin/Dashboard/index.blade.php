@section('meta_title') Dashboard | 80 Tech @endsection
@extends('Admin.Layouts.layout')
@section('css')
<style>
    .card {
        display: block;
        min-width: 0;
        word-wrap: break-word;
        background-color: var(--ct-card-bg);
        background-clip: border-box;
        border: 0 solid var(--ct-card-border-color);
        border-radius: 0.25rem;

    }

    .morris-donut-example svg text tspan {
        font-size: 10px !important;
    }

    .content {
        padding-top: 25px;
    }

    .random {
        display: none;
    }
    .content-page {
    padding: 0 12px 40px 12px;
}
</style>
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-9">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="dashboard-card">
                        <h4 class="header-title mt-0 mb-4">Institutions</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-start" dir="ltr" style="margin-top: 20px;">
                                <i class="fa-solid fa-building-columns" style="font-size: 3rem; color:#ffffff2e;"></i>
                            </div>
                            <div class="widget-detail-1 text-end">
                                <h1 class="fw-normal mb-1"> 55 </h1>
                                <p class="mb-1">Total Institutions</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 ps-lg-0">
                    <div class="dashboard-card">
                        <h4 class="header-title mb-4">Institution Students</h4>
                        <div class="d-flex justify-content-between">
                            <div class="widget-chart-box-1 float-start" dir="ltr" style="margin-top: 20px;">
                                <i class="fa-solid fa-graduation-cap" style="font-size: 3rem; color:#ffffff2e;"></i>
                            </div>
                            <div class="text-end">
                                <h1 class="fw-normal mb-1"> 55 </h1>
                                <p class="mb-1">Total Students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="dashboard-card">
                        <h4 class="header-title mb-4">Private Students</h4>
                        <div class="d-flex justify-content-between">
                            <div class="widget-chart-box-1 float-start" dir="ltr" style="margin-top: 20px;">
                                <i class="fa-solid fa-graduation-cap" style="font-size: 3rem; color:#ffffff2e;"></i>
                            </div>
                            <div class="text-end">
                                <h1 class="fw-normal mb-1"> 55 </h1>
                                <p class="mb-1">Total Students</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3 ps-lg-0">
                    <div class="dashboard-card">
                        <h4 class="header-title mt-0 mb-4">Counsellors</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-start" dir="ltr" style="margin-top: 20px;">
                                <i class="fa-solid fa-user-graduate" style="font-size: 3rem; color:#ffffff2e;"></i>
                            </div>
                            <div class="widget-detail-1 text-end">
                                <h1 class="fw-normal mb-1"> 55 </h1>
                                <p class="mb-1">Total Counsellors</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 mb-3">
                    <div class="dashboard-card">
                        <h4 class="header-title mt-0 mb-4">Industries</h4>
                        <div class="widget-chart-1">
                            <div class="widget-chart-box-1 float-start" dir="ltr" style="margin-top: 20px;">
                                <i class="fa-solid fa-industry" style="font-size: 3rem; color:#ffffff2e;"></i>
                            </div>
                            <div class="widget-detail-1 text-end">
                                <h1 class="fw-normal mb-1"> 55 </h1>
                                <p class="mb-1">Total Industries</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 ps-lg-0">
            <div class="ticket-card card">
                <h4 class="header-title px-2 pt-2">Tickets</h4>
                <div class="card-body">
                    <a class="card card-pending" href="#">
                        <p>Pending</p>
                        <h4 class="count">10</h4>
                        <div class="go-corner">
                        </div>
                    </a>
                    <a class="card card-approved" href="#">
                        <p>In Process</p>
                        <h4 class="count">5</h4>
                        <div class="go-corner">
                        </div>
                    </a>
                    <a class="card card-rejected" href="#">
                        <p>Completed</p>
                        <h4 class="count">51</h4>
                        <div class="go-corner">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('script')
<script>
    var pieCanvas = document.getElementById('support-ticket-pie-chart').getContext('2d');
    var support_counts = JSON.parse($("#support-ticket-pie-chart").attr('data-counts'));
    var pieData = {
        labels: ['Resolved', 'Pending', 'Closed'],
        datasets: [{
            data: support_counts,
            backgroundColor: ["#ff8acc", "#5b69bc", "#f1b53d"],
            hoverBackgroundColor: ["#ff8acc", "#5b69bc", "#f1b53d"],
            hoverBorderColor: "#fff",
        }]
    };
    var myPieChart = new Chart(pieCanvas, {
        type: 'pie',
        data: pieData,
        options: {
            maintainAspectRatio: false,
        }
    });
</script>

<script>
    var doughnutCanvas = document.getElementById('requisition-doughnut-chart').getContext('2d');
    var requisition_counts = JSON.parse($("#requisition-doughnut-chart").attr('data-counts'));
    var doughnutData = {
        labels: ['Completed', 'Pending', 'Rejected'],
        datasets: [{
            data: requisition_counts,
            backgroundColor: ["#ff8acc", "#5b69bc", "#f1b53d"],
            hoverBackgroundColor: ["#ff8acc", "#5b69bc", "#f1b53d"],
            hoverBorderColor: "#fff",
        }]
    };
    var myPieChart = new Chart(doughnutCanvas, {
        type: 'doughnut',
        data: doughnutData,
        options: {
            maintainAspectRatio: false,
        }
    });
</script>
@endsection