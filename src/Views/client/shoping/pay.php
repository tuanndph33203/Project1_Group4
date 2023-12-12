<div class="container">
    <div class="card">
        <div class="card-header bg-danger text-white">
            <h4>Thanh Toán</h4>
        </div>
        <div class="card-body">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-6">
                            <h4>Sản Phẩm</h4>
                        </div>
                        <div class="col-sm-2">Đơn Giá</div>
                        <div class="col-sm-2">Số Lượng</div>
                        <div class="col-sm-2">Thành Tiền</div>
                    </div>
                </div>
                <div class="card-body">
                    <?php
                    $subtotal = 0;
                    foreach ($orders_detail as $key => $order_detail) { ?>
                        <div class="row text-center">
                            <div class="col-sm-6">
                                <img src="/assets/img/product/<?= $order_detail['image'] ?>" style="width: 60px;height: 60px;border-radius: 5px;" class="mr-4" alt="">
                                <strong style="color: red;"><?= $order_detail['product_name'] ?> </strong> [ <?= $order_detail['size'] . $order_detail['unit_name'] ?> ]
                            </div>
                            <div class="col-sm-2"><strong class="money"><?= $order_detail['subtotal'] ?></strong> <i>Vnd</i></div>
                            <div class="col-sm-2"><strong><?= $order_detail['quantity'] ?></strong></div>
                            <div class="col-sm-2"><strong class="money" style="color: red;"><?= $order_detail['subtotal'];
                                                                                            $subtotal += $order_detail['subtotal'] ?></strong> <i>Vnd</i></div>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
    <div class="card mt-4">
        <div class="card-header bg-dark text-white">
            <h4>Đơn Hàng Của Bạn</h4>
        </div>
        <div class="card-body">
            <div class="row mb-2">
                <div class="col-sm-7">
                    <h6>Tổng Phụ :</h6>
                </div>
                <div class="col-sm-5 d-flex justify-content-end">
                    <h6 class="money" style="color: red;"><?= $subtotal ?></h6>
                    <h6><i> Vnd</i></h6>
                </div>
            </div>
            <div class="row mb-2">
                <div class="col-sm-7">
                    <h6>Phí Vận Chuyển :</h6>
                </div>
                <div class="col-sm-5 d-flex justify-content-end">
                    <h6 style="color: red;" class="money">50.000</h6>
                    <h6><i> Vnd</i></h6>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-7">
                    <h6>Tổng Tiền :</h6>
                </div>
                <div class="col-sm-5 d-flex justify-content-end">
                    <h6 class="money" style="color: red;"><?= $subtotal + 50000 ?></h6>
                    <h6><i>Vnd</i></h6>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <form class="accordion" id="myAccordion" action="" method="post">
                <div class="card">
                    <div class="card-header" id="section1">
                        <button class="btn btn-warning w-100" type="button" data-toggle="collapse" data-target="#content1" aria-expanded="true" aria-controls="content1">Thanh Toán</button>
                    </div>
                    <div id="content1" class="collapse show" aria-labelledby="section1" data-parent="#myAccordion">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="cardNumber">Số thẻ ngân hàng:</label>
                                <input type="text" class="form-control" id="cardNumber" placeholder="Nhập số thẻ ngân hàng" required>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="expiryDate">Ngày hết hạn:</label>
                                    <input type="text" class="form-control" id="cardNumber" placeholder="Nhập số thẻ ngân hàng" required>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="expiryDate">Ngày hết hạn:</label>
                                        <input type="date" class="form-control" id="expiryDate" placeholder="MM/YY" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="cvv">CVV:</label>
                                        <input type="text" class="form-control" id="cvv" placeholder="Nhập mã CVV" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <button type="submit" name="submit-order" class="btn btn-danger w-75 h-100 waves-effect">Thanh Toán</button>
                </div>
            </form>
        </div>
    </div>
</div>