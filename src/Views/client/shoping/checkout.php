<div class="main_blog_area blog_details">
    <form id="myForm" action="/client/shoping/order" method="post" class="row">
        <div class="col-lg-8 col-md-12">
            <div class="blog_details_left mb-4">
                <div class="blog_gallery">
                    <div class="blog_header border container">
                        <h4 style="color: red;">Thanh Toán</h4>
                    </div>
                    <div class="blog_gallery border py-4">
                        <div class="blog_header row ">
                            <div class="col-sm-6">
                                <h4>Sản Phẩm</h4>
                            </div>
                            <div class="col-sm-2">Đơn Giá</div>
                            <div class="col-sm-2">Số Lượng</div>
                            <div class="col-sm-2">Thành Tiền</div>
                        </div>
                        <div class="blog_entry_content row text-center">
                            <div class="col-sm-6">
                                <img src="/assets/img/product/<?= $product['image'] ?>" style="width: 60px;height: 60px;border-radius: 5px;" class="mr-4" alt="">
                                <strong style="color: red;"><?= $product['product_name'] ?> </strong> [ <?= $data['detail_price'][$data['detail_size']] . $product['unit_name'] ?> ]
                            </div>
                            <div class="col-sm-2"><strong class="money"><?= $data['detail_size'] ?></strong> <i>Vnd</i></div>
                            <div class="col-sm-2"><strong><?= $data['quantity'] ?></strong></div>
                            <div class="col-sm-2"><strong class="money" style="color: red;"><?= $data['total_price'] ?></strong> <i>Vnd</i></div>
                        </div>
                    </div>
                </div>
                <!--services img area-->
                <!--services img end-->
            </div>
            <div class="blog_details_left">
                <div class="blog_gallery border p-2">
                    <div class="blog_header ">
                        <h4>Thông Tin</h4>
                    </div>
                    <div class="blog_entry_content container mb-4">
                        <div class="row">
                            <h5>Địa chỉ nhận hàng</h5>
                        </div>
                        <div class="row my-2">
                            <div class="col-sm-2">Tên Của Bạn : </div>
                            <div class="col-sm-9"><input type="text" name="receiver" class="form-control"></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-sm-2">Số Điện Thoại : </div>
                            <div class="col-sm-9"><input type="text" name="order_phone" class="form-control"></div>
                        </div>
                        <div class="row my-2">
                            <div class="col-sm-2">Địa Chỉ Cụ Thể : </div>
                            <div class="col-sm-9"><textarea name="order_address" id="" cols="5" rows="1" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-8 offset-md-2 offset-lg-0">
            <div class="blog_details_right">
                <div class="blog_widget recent-posts mb-30 border p-2">
                    <h3>Đơn Hàng Của Bạn</h3>
                    <div class="single_posts mb-20 ml-1 d-block">
                        <div class="comtainer p-4 bg-light">
                            <div class="row ">
                                <div class="col-sm-7">
                                    <h6>Tổng Phụ : </h6>
                                </div>
                                <div class="col-sm-5 d-flex justify-content-end">
                                    <h6 class="money" style="color: red;"><?= $data['total_price'] ?></h6>
                                    <h6><i> Vnd</i></h6>
                                </div>
                            </div>
                            <div class="row py-1">
                                <div class="col-sm-7">
                                    <h6>Phí Vận Chuyển : </h6>
                                </div>
                                <div class="col-sm-5 d-flex justify-content-end">
                                    <h6 style="color: red;" class="money">50.000</h6>
                                    <h6><i> Vnd</i></h6>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-7">
                                    <h6>Tổng Tiền : </h6>
                                </div>
                                <div class="col-sm-5 d-flex justify-content-end">
                                    <h6 class="money" style="color: red;"><?= $data['total_price'] + 50000 ?></h6>
                                    <h6><i>Vnd</i></h6>
                                    <input type="hidden" name="total_price" value="<?= $data['total_price'] + 50000 ?>">
                                    <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                                    <input type="hidden" name="size" value="<?= $data['detail_price'][$data['detail_size']] ?>">
                                    <input type="hidden" name="quantity" value="<?= $data['quantity'] ?>">
                                    <input type="hidden" name="subtotal" value="<?= $data['total_price'] ?>">
                                </div>
                            </div>
                        </div>
                        <div class="container p-4">
                            <div class="row mb-4">
                                <div class="card w-100 ">
                                    <div class="card-header d-flex justify-content-center" id="section1">
                                        <button class="btn btn-warning w-75" type="button" data-toggle="collapse" data-target="#content1" aria-expanded="true" aria-controls="content1">Thanh Toán</button>
                                    </div>
                                    <div id="content1" class="collapse show" aria-labelledby="section1" data-parent="#myAccordion">
                                        <div class="card-body">
                                            <div class="form-group">
                                                <label for="cardNumber">Số thẻ ngân hàng:</label>
                                                <input type="text" class="form-control" id="cardNumber" placeholder="Nhập số thẻ ngân hàng">
                                            </div>
                                            <div class="form-row">
                                                <div class="form-group col-md-6">
                                                    <label for="expiryDate">Ngày hết hạn:</label>
                                                    <input type="date" class="form-control" id="expiryDate" placeholder="MM/YY">
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="cvv">CVV:</label>
                                                    <input type="text" class="form-control" id="cvv" placeholder="Nhập mã CVV">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <button type="submit" name="submit-order" class="btn btn-danger w-75 h-100 waves-effect" >Đặt Hàng</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>