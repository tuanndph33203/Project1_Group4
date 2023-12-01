<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <i class="feather icon-edit bg-c-blue"></i>
                        <h5>Chi Tiết Đơn Hàng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/orders">Danh Sách</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="card">
                        <div class="card-header border">
                            <div class="row">
                                <h5>Mã Đơn Hàng : <?= $order['order_id'] ?></h5>
                            </div>
                            <div class="row">
                                <span class="col-sm-9">Ngày đặt : <?= $order['order_date'] ?></span>
                                <div class="col-sm-3">
                                    <div class="btn btn-info"><?= $order['status_order_name'] ?></div>
                                </div>
                            </div>
                        </div>
                        <div class="card-block">
                            <div class="container">
                                <div class="row justify-content-between mb-4">
                                    <div class="col-sm-5 border">
                                        <div class="row border bg-light p-2">
                                            <span>Người Nhận Hàng</span>
                                        </div>
                                        <div class="row border px-4 py-2 d-block">
                                            <div class="row">
                                                <span>Người Nhận Hàng :</span>
                                                <span class="font-weight-bold"><?= $order['receiver'] ?></span>
                                            </div>
                                            <div class="row">
                                                <span>Số điện thoại : </span>
                                                <span><?= $order['order_phone'] ?></span>
                                            </div>
                                            <div class="row">
                                                <span>Địa chỉ : </span>
                                                <span><?= $order['order_address'] ?></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-5">
                                        <div class="row border bg-light p-2">
                                            <span>Người Gửi</span>
                                        </div>
                                        <div class="row border px-4 py-2 d-block">
                                            <div class="row">
                                                <span>Người Gửi : Cosmetics-Group4</span>
                                            </div>
                                            <div class="row">
                                                <span>Số điện thoại : 0888888888</span>
                                            </div>
                                            <div class="row">
                                                <span>Địa chỉ : Tòa nhà FPT Polytechnic, 13 phố Trịnh Văn Bô, phường Phương Canh, quận Nam Từ Liêm, TP Hà Nội</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row border mb-4">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Mặt hàng</th>
                                                <th>Số Lượng</th>
                                                <th>Trọng Lượng</th>
                                                <th>Đơn Giá</th>
                                                <th>Tổng Tiền</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($order_detail as $index => $detail) { ?>
                                                <tr>
                                                    <td><?= $index + 1; ?></td>
                                                    <td><?php echo $detail['product_name']; ?></td>
                                                    <td><?php echo $detail['quantity']; ?></td>
                                                    <td><?php echo $detail['size'] . " " . $detail['unit_name']; ?></td>
                                                    <td><?php echo $detail['price']; ?></td>
                                                    <td><?php echo $detail['subtotal']; ?></td>
                                                </tr>
                                            <?php } ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 border bg-light p-2">
                                        <span>Thanh Toán</span>
                                    </div>
                                    <div class="col-sm-12 border p-4">
                                        <div class="row">
                                            <div class="col-sm-9">
                                                Cần Thanh Toán : <strong style="font-weight: bold; color:brown"><?= $order['total_price'] ?> <i>Vnd</i></strong> 
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="btn btn-danger"><?=$order['pay_name'] ?></div>
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
        <div id="styleSelector">
        </div>
    </div>
</div>