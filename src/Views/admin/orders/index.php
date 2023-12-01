<div class="pcoded-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Danh Sách Đơn Hàng</h3>
                            </div>
                            <div class="card-block">
                                <form class="dt-reponsive row" method="post">
                                    
                                </form>
                                <div class="dt-responsive table-responsive">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mặt hàng</th>
                                                <th>Địa Chỉ</th>
                                                <th>Ngày Đặt Hàng</th>
                                                <th>Tổng Tiền</th>
                                                <th>Trạng Thái Đơn</th>
                                                <th>Thao Tác</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            foreach ($orders as $key => $order) : ?>
                                                <tr>
                                                    <td><?php echo $key + 1; ?></td>
                                                    <td class="p-0 m-0">
                                                        <table class="w-100 h-100">
                                                            <tr>
                                                                <th>Tên Sản Phẩm</th>
                                                                <th>Trọng Lượng</th>
                                                                <th>Số Lượng</th>
                                                            </tr>
                                                            <?php foreach ($orders_detail[$key] as $index => $order_detail) { ?>
                                                                    <tr>
                                                                        <td><?php echo $order_detail['product_name']; ?></td>
                                                                        <td><?php echo $order_detail['size'] . " " . $order_detail['unit_name']; ?></td>
                                                                        <td><?php echo $order_detail['total_quantity']; ?></td>
                                                                    </tr>
                                                       
                                                            <?php } ?>
                                                        </table>
                                                    </td>
                                                    <td>Tên Khách Hàng: <?php echo $order['username']; ?><br> Số Điện Thoại: <?php echo $order['phone']; ?><br> Địa Chỉ: <?php echo $order['address']; ?></td>
                                                    <td><?php echo $order['order_date']; ?></td>
                                                    <td><?php echo $order['total_price']; ?> <i>Vnd</i></td>
                                                    <td><?php echo $order['status_order_name']; ?></td>
                                                    <td><a class="btn btn-info" href="">Xác Nhận Đơn</a></td>
                                                </tr>
                                            <?php endforeach; ?>
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
    <div id="styleSelector">
    </div>
</div>