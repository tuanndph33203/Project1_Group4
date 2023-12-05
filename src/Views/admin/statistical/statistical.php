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
                                            <h3 class="m-b-0 f-w-700 text-white money"><?php $total = 0; // Initialize a variable to store the total
                                                                                        foreach ($order_details as $order_detail) {
                                                                                            $total += $order_detail['subtotal']; // Add the subtotal to the total
                                                                                        };
                                                                                        echo $total; ?></h3>
                                            <h3>Vnd</h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-money-bill-alt text-c-red f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-blue">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Tổng Số Đơn Đã Đặt</h6>
                                            <h3 class="m-b-0 f-w-700 text-white"><?php echo count($orders) ?></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-database text-c-blue f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-green">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Đơn Tháng Này</h6>
                                            <h3 class="m-b-0 f-w-700 text-white"><?php echo $month_order['total_orders'] ?></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign text-c-green f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card prod-p-card card-yellow">
                                <div class="card-body">
                                    <div class="row align-items-center m-b-30">
                                        <div class="col">
                                            <h6 class="m-b-5 text-white">Sản Phẩm Đã Bán</h6>
                                            <h3 class="m-b-0 f-w-700 text-white"><?php $total = 0; // Initialize a variable to store the total
                                                                                    foreach ($order_details as $order_detail) {
                                                                                        $total += $order_detail['quantity']; // Add the subtotal to the total
                                                                                    };
                                                                                    echo $total; ?></h3>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-tags text-c-yellow f-18"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 col-xl-12 py-4">
                            <div class="container">
                                <div class="page-header-title">
                                    <div class="d-inline">
                                        <h5>Biểu đồ doanh thu</h5>
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
                                                <?php
                                                foreach ($types as $type) { ?>
                                                    <tr>
                                                        <td><?= $type['type_name'] ?></td>
                                                        <td><?= $type['total_column'] ?></td>
                                                    </tr>
                                                <?php } ?>
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
                                                    <th>Thương Hiệu sản phẩm</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($brands as $brand) { ?>
                                                    <tr>
                                                        <td><?= $brand['brand_name'] ?></td>
                                                        <td><?= $brand['total_column'] ?></td>
                                                    </tr>
                                                <?php } ?>
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
                                        <h2>Đơn Vị</h2>
                                        <table id="myTable" class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th>Dạng</th>
                                                    <th>Số lượng</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($units as $unit) { ?>
                                                    <tr>
                                                        <td><?= $unit['unit_name'] ?></td>
                                                        <td><?= $unit['total_column'] ?></td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card table-card">
                                <div class="card-header">
                                    <h5>Sản Phẩm Mới</h5>
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
                                                    <th>STT</th>
                                                    <th>Tên Sản Phẩm</th>
                                                    <th>Dành Cho Da</th>
                                                    <th>Trạng Thái</th>
                                                    <th>Ngày Nhập Kho</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                for ($i = 0; $i < 5; $i++) {  ?>
                                                    <tr>
                                                        <td><?php echo $i + 1; ?></td>
                                                        <td><?= $products[$i]['product_name'] ?></td>
                                                        <td><?= $products[$i]['skin_name'] ?></td>
                                                        <td><?= $products[$i]['status_name'] ?></td>
                                                        <td><?=date("d-m-Y", $products[$i]['time_create']) ?></td>
                                                    </tr>
                                                <?php } ?>
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
<script>
    $(document).ready(function() {
        // Dữ liệu doanh thu sản phẩm theo tháng
        var revenueData = {
            labels: ['Tháng 1', 'Tháng 2', 'Tháng 3', 'Tháng 4', 'Tháng 5', 'Tháng 6', 'Tháng 7', 'Tháng 8', 'Tháng 9', 'Tháng 10', 'Tháng 11', 'Tháng 12'],
            datasets: [{
                label: 'Doanh thu',
                data: [
                    <?php
                    foreach ($charts as $month => $chart) {
                        echo $chart['total_price'] . ', ';
                    }
                    ?>
                ],
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