<div class="main_blog_area blog_details">
    <div class="row">
        <div class="col-lg-9 col-md-12">
            <div class="blog_details_left">
                <div class="blog_gallery">
                    <div class="blog_header">
                        <span>
                            <a href="#">Chi tiết sản phẩm</a>
                        </span>
                        <h2><a href="#"><?= $product['product_name'] ?></a></h2>
                    </div>
                    <div class="blog_active owl-carousel border mb-4">
                        <div class="blog_thumb blog__hover">
                            <a href="blog-details.html"><img src="/assets/img/product/<?= $product['image'] ?>" height="500px" alt=""></a>
                        </div>
                    </div>
                    <div class="blog_entry_content container mb-4">
                        <div class="row">
                            <h5>Chi Tiết Sản Phẩm</h5>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Loại Sản Phẩm : </div>
                            <div class="col-sm-6"><?= $product['type_name'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Thương hiệu : </div>
                            <div class="col-sm-6"><?= $product['brand_name'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Mỹ Phẩm Dạng : </div>
                            <div class="col-sm-6">
                                <?php if ($product['unit_id'] == 1) {
                                    echo "Đặc";
                                } else {
                                    echo "Lỏng";
                                }
                                ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Phù Hợp Với Loại Da : </div>
                            <div class="col-sm-6"><?= $product['skin_name'] ?></div>
                        </div>
                        <div class="row">
                            <div class="col-sm-2">Hạn Sử Dụng : </div>
                            <div class="col-sm-6"><?php $s = ($product['expiry'] * 86400) + $product['time_create'];
                                                    $check = $s - time();
                                                    if ($check > 0) {
                                                        echo date('d-m-Y', $s);
                                                    } else {
                                                        echo "Đã Hết Hạn Sử Dụng";
                                                    }
                                                    ?></div>

                        </div>
                    </div>
                    <div class="blog_entry_content container">
                        <div class="row">
                            <h5>Mô Tả Sản Phẩm</h5>
                        </div>
                        <div class="row">
                            <?= $product['description'] ?>
                        </div>
                    </div>
                </div>
                <!--services img area-->
                <!--services img end-->
            </div>
        </div>
        <div class="col-lg-3 col-md-8 offset-md-2 offset-lg-0">
            <div class="blog_details_right">
                <div class="blog_widget recent-posts mb-30 border p-2">
                    <h3>Thông Tin</h3>
                    <form action="" method="post" class="single_posts mb-20 ml-1 d-block">
                        <div class="row">
                            <div class="col-sm-5">
                                <strong>Trọng Lượng</strong>
                            </div>
                            <div class="col-sm-7">
                                <strong>Giá Tiền</strong>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($product_details as $product_detail) { ?>
                                <div class="col-sm-5 d-flex align-items-center">
                                    <input type="radio" class="unit-price" value="<?= htmlspecialchars($product_detail['price']) ?>" name="unit_price" style="width: 15px;" onclick="updateTotal()">
                                    <span class="mr-4 ml-1"><?= htmlspecialchars($product_detail['size'] . " " . $product['unit_name']) ?></span>
                                </div>
                                <div class="col-sm-7 d-flex align-items-center">
                                    <span class="mr-4 ml-1"><?= htmlspecialchars($product_detail['price']) ?> <i>Vnd</i></span>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="single_posts mb-20">
                            <div class="post_content">
                                <span>
                                    <strong>Số Lượng</strong>
                                </span>
                                <input type="number" id="quantity" name="quantity" value="1" min="1" onchange="updateTotal()">
                            </div>
                        </div>
                        <div class="single_posts mb-20">
                            <div class="post_content">
                                <span>
                                    <strong>Tổng Tiền</strong>
                                </span>
                                <input type="text" id="total-amount" name="" disabled><i>Vnd</i>
                            </div>
                        </div>
                        <div class="container">
                            <div class=" justify-content-center p-1"><button class=" w-75 btn btn-warning">Thêm Vào Giỏ Hàng</button></div>
                            <div class=" justify-content-center p-1"><button class=" w-75 btn btn-danger">Mua Hàng</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateTotal() {
        var unitPriceElements = document.getElementsByClassName('unit-price');
        var unitPrice;

        for (var i = 0; i < unitPriceElements.length; i++) {
            if (unitPriceElements[i].checked) {
                unitPrice = parseFloat(unitPriceElements[i].value);
                break;
            }
        }

        var quantity = parseInt(document.getElementById('quantity').value);
        var totalAmount;

        if (isNaN(unitPrice) || isNaN(quantity)) {
            totalAmount = 0;
        } else {
            totalAmount = unitPrice * quantity;
        }

        document.getElementById('total-amount').value = totalAmount;
    }
</script>