<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="/">Trang Chủ</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Danh Sách Đơn Hàng</li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!--shopping cart area start -->
<div class="shopping_cart_area">
    <form action="#">
        <div class="row">
            <div class="col-12">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <?php foreach ($orders as $key => $order) : ?>
                            <div class="card mb-3">
                                <div class="card-body">
                                    <h5 class="card-title">STT: <?= $key + 1; ?></h5>
                                    <div class="row">
                                        <?php foreach ($orders_detail[$key] as $index => $order_detail) { ?>
                                            <div class="col-md-4">
                                                <img src="/assets/img/product/<?= $order_detail['image'] ?>" class="card-img-top" style="width: 100px; height: 100px;">
                                                <div class="card-body">
                                                    <h5 class="card-title"><?php echo $order_detail['product_name']; ?></h5>
                                                    <p class="card-text">Phân Loại: <?php echo $order_detail['size'] . " " . $order_detail['unit_name']; ?></p>
                                                    <p class="card-text"><?php echo $order_detail['quantity']; ?> Sản Phẩm</p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                    <p class="total-price text-right" style="color: red;font-weight: bold;">Tổng Tiền : <span class="money"><?php echo $order['total_price']; ?></span> Vnd</p>
                                    <p class="status text-success">Trạng Thái: <?php echo $order['status_order_name']; ?></p>
                                    <?php if ($order['status_order_id'] == 3 && $order['pay_id'] == 1) { ?>
                                        <p class="status text-success"><a href="/client/shoping/pay?id=<?= $order['order_id'] ?>&pay=2" class="btn btn-success">Thanh Toán - Nhận Hàng</a></p>
                                    <?php } else if ($order['status_order_id'] == 3 && $order['pay_id'] == 2) { ?>
                                        <p class="status text-success"><a href="/client/shoping/receive?id=<?= $order['order_id'] ?>&pay=2" class="btn btn-success">Nhận Hàng</a></p>
                                    <?php } else if ($order['status_order_id'] == 1 || $order['status_order_id'] == 2) { ?>
                                        <?php if ($order['pay_id'] == 1) { ?>
                                            <p class="status text-success"><a href="/client/shoping/cancel?id=<?= $order['order_id'] ?>&pay=1" class="btn btn-warning">Hủy Đơn</a></p>
                                            <p class="status text-success"><a href="/client/shoping/pay?id=<?= $order['order_id'] ?>&pay=1" class="btn btn-info">Thanh Toán</a></p>
                                        <?php } else { ?>
                                            <p class="status text-success"><a href="/client/shoping/cancel?id=<?= $order['order_id'] ?>&pay=2" class="btn btn-warning">Hủy Đơn - Hoàn Tiền</a></p>
                                        <?php } ?>
                                    <?php } else if ($order['status_order_id'] == 4) { ?>
                                        <p class="status text-success"><a href="/client/shoping/return?id=<?= $order['order_id'] ?>" class="btn btn-danger">Trả Hàng</a></p>
                                    <?php } else if ($order['status_order_id'] == 5 || $order['status_order_id'] == 6) { ?>
                                        <p class="status text-success"><a href="/client/shoping/rachat?id=<?= $order['order_id'] ?>" class="btn btn-danger">Mua Lại</a></p>
                                    <?php } ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>