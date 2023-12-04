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
                                <form class="container-fluid dt-reponsive  mb-4" method="post">
                                    <div class="row">
                                        <div class="col-sm-2"><a href="/admin/orders" class="btn btn-success">Tất Cả</a></div>
                                        <div class="col-sm-2"><a href="/admin/orders?id=1" class="btn btn-success">Đang Xử Lý</a></div>
                                        <div class="col-sm-2"><a href="/admin/orders?id=3 " class="btn btn-success">Giao Hàng</a></div>
                                        <div class="col-sm-2"><a href="/admin/orders?id=4" class="btn btn-success">Hoàn Thành</a></div>
                                        <div class="col-sm-2"><a href="/admin/orders?id=5" class="btn btn-success">Đã Hủy</a></div>
                                        <div class="col-sm-2"><a href="/admin/orders?id=6" class="btn btn-success">Trả Hàng</a></div>
                                    </div>
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
                                                                    <td><?php echo $order_detail['quantity']; ?></td>
                                                                </tr>

                                                            <?php } ?>
                                                        </table>
                                                    </td>
                                                    <td>Tên Khách Hàng: <?php echo $order['receiver']; ?><br> Số Điện Thoại: <?php echo $order['order_phone']; ?><br> Địa Chỉ: <?php echo $order['order_address']; ?></td>
                                                    <td><?php echo $order['order_date']; ?></td>
                                                    <td><?php echo $order['total_price']; ?> <i>Vnd</i></td>
                                                    <td><?php echo $order['status_order_name']; ?></td>
                                                    <td class="container">   
                                                        <div class="row mb-4">
                                                            <?php if ($order['status_order_id'] == 1) { ?>
                                                                <a class="btn btn-success" href="/admin/orders/status?id=<?=$order['order_id'] ?>&act=2">Xác Nhận </a>
                                                            <?php } else if ($order['status_order_id'] == 2) { ?>
                                                                <a class="btn btn-danger" href="/admin/orders/status?id=<?=$order['order_id'] ?>&act=3">Vận Chuyển </a>
                                                            <?php } ?>
                                                        </div>
                                                        <a class="row btn btn-info" href="/admin/orders/detail?id=<?=$order['order_id'] ?>">Xem chi tiết</a>
                                                    </td>
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