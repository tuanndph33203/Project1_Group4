<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-home bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Biểu đồ thống kê</h5>
                        <span>Trang thống kê doanh số, sản phẩm</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="/">Trang Người Dùng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">

                    <div class="row">
                        <div class="col-xl-3 col-md-6">

                            <div class="card prod-p-card card-red">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Tổng Lợi Nhuận</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">$1,783</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-danger m-r-10">+11%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Tổng Số Đơn Đã Đặt</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">15,830</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-primary m-r-10">+12%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Tăng Trưởng</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">$6,780</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-success m-r-10">+52%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-yellow">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Sản Phẩm Đã Bán</h6>
                                            <h3 class="m-b-0 f-w-700 text-white">6,784</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags text-c-yellow f-18"></i>
                                        </div>
                                    </div>
                                    <p class="m-b-0 text-white"><span class="label label-warning m-r-10">+52%</span>From
                                        Previous Month</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xl-12 py-4">
                            <div class="container">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h5>Biểu đồ đơn hàng</h5>
                                    </div>
                                </div>
                                <canvas id="myChart"></canvas>
                            </div>

                            <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
                            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
                            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
                            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
                            <script src="app.js"></script>
                        </div>

                        <div class="col-md-12 col-xl-4">
                            <div class="card card-blue text-white">
                                <div class="card-block p-b-0">
                                    <div class="container">
                                        <h2>Loại Sản Phẩm</h2>
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Loại sản phẩm</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="card card-blue text-white">
                                <div class="card-block p-b-0">
                                    <div class="container">
                                        <h2>Thương Hiệu</h2>
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Loại sản phẩm</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-4">
                            <div class="card card-blue text-white">
                                <div class="card-block p-b-0">
                                    <div class="container">
                                        <h2>Dạng Sản Phẩm</h2>
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Loại sản phẩm</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>New Products</h5>
                                    <div class="card-header-right">
                                        <ul class="list-unstyled card-option">
                                            <li class="first-opt"><i class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                            <li><i class="feather icon-maximize full-card"></i></li>
                                            <li><i class="feather icon-minus minimize-card"></i>
                                            </li>
                                            <li><i class="feather icon-refresh-cw reload-card"></i>
                                            </li>
                                            <li><i class="feather icon-trash close-card"></i></li>
                                            <li><i class="feather icon-chevron-left open-card-option"></i>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-block p-b-0">
                                    <div class="table-responsive">
                                        <table class="table table-hover m-b-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Product Code</th>
                                                    <th>Customer</th>
                                                    <th>Status</th>
                                                    <th>Rating</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Sofa</td>
                                                    <td>#PHD001</td>
                                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6302010023040e020a0f4d000c0e">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Computer</td>
                                                    <td>#PHD002</td>
                                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="6704030427000a060e0b4904080a">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Mobile</td>
                                                    <td>#PHD003</td>
                                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdcdcccffddad0dcd4d193ded2d0">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Coat</td>
                                                    <td>#PHD004</td>
                                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="90f2f3e3d0f7fdf1f9fcbef3fffd">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Watch</td>
                                                    <td>#PHD005</td>
                                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="65060106250208040c094b060a08">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-success">In
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Shoes</td>
                                                    <td>#PHD006</td>
                                                    <td><a href="https://demo.dashboardpack.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="e6969794a6818b878f8ac885898b">[email&#160;protected]</a>
                                                    </td>
                                                    <td><label class="label label-danger">Out
                                                            Stock</label></td>
                                                    <td>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-c-yellow"></i></a>
                                                        <a href="#!"><i class="fa fa-star f-12 text-default"></i></a>
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
        </div>
    </div>
</div>

<script src="/assets/admin_files/assets/pages/widget/amchart/amcharts.js"></script>
<script src="/assets/admin_files/assets/pages/widget/amchart/gauge.js"></script>
<script src="/assets/admin_files/assets/pages/widget/amchart/serial.js"></script>
<script src="/assets/admin_files/assets/pages/widget/amchart/light.js"></script>
<script src="/assets/admin_files/assets/pages/widget/amchart/pie.min.js"></script>
<script src="/assets/admin_files/assets/pages/widget/amchart/ammap.min.js"></script>
<script src="/assets/admin_files/assets/pages/widget/amchart/usaLow.js"></script>

<script src="/assets/admin_files/bower_components/chartist/js/chartist.js"></script>

<script src="/assets/admin_files/assets/js/pcoded.min.js"></script>
<script src="/assets/admin_files/assets/js/vertical/vertical-layout.min.js"></script>
<script type="text/javascript" src="/assets/admin_files/assets/pages/dashboard/analytic-dashboard.min.js"></script>
<script type="text/javascript" src="/assets/admin_files/assets/js/script.min.js"></script>
<script>
    $(document).ready(function() {
        // Dữ liệu doanh thu sản phẩm theo tháng
        var revenueData = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Doanh thu',
                data: [5000, 7000, 3000, 9000, 6000, 8000, 4000, 10000, 7500, 5500, 3500, 9500],
                backgroundColor: 'rgba(54, 162, 235, 0.2)',
                borderColor: 'rgba(54, 162, 235, 1)',
                borderWidth: 1
            }]
        };

        // Tạo biểu đồ
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: revenueData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 2000
                        }
                    }
                }
            }
        });
    });
</script>