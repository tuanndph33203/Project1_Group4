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
                                <?php

                                if ($product['unit_id'] == 1) {
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
                    <div class="comments_area">
                        <div class="comments__title">
                            <h3>Leave a Reply </h3>
                        </div>
                        <div class="comments__notes">
                            <p>Your email address will not be published.</p>
                        </div>
                        <iframe src="Views/client/comment/comment.php" width="100%" height="200px" frameborder="0"></iframe>
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
                    <form id="cartForm" action="" method="post" class="single_posts mb-20 ml-1 d-block">
                        <div class="row">
                            <div class="col-sm-5">
                                <strong>Trọng Lượng</strong>
                            </div>
                            <div class="col-sm-7">
                                <strong>Giá Tiền</strong>
                            </div>
                        </div>
                        <div class="row">
                            <?php foreach ($product_details as $key => $product_detail) { ?>
                                <div class="col-sm-5 d-flex align-items-center">
                                    <input type="radio" required class="unit-price" value="<?= htmlspecialchars($product_detail['price']) ?>" name="detail_size" style="width: 15px;" onclick="updateTotal()">
                                    <input type="hidden" name="detail_price[<?= htmlspecialchars($product_detail['price']) ?>]" value="<?= htmlspecialchars($product_detail['size']) ?>">
                                    <span class="mr-4 ml-1"><?= htmlspecialchars($product_detail['size'] . " " . $product['unit_name']) ?></span>
                                </div>
                                <div class="col-sm-7 d-flex align-items-center">
                                    <span class="mr-4 ml-1 money"><?= htmlspecialchars($product_detail['price']) ?></span> <i>Vnd</i>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="single_posts mb-20">
                            <div class="post_content">
                                <span>
                                    <strong>Số Lượng</strong>
                                </span>
                                <input type="number" id="quantity" name="quantity" required value="1" min="1" onchange="updateTotal()">
                            </div>
                        </div>
                        <div class="single_posts mb-20">
                            <div class="post_content">
                                <span>
                                    <strong>Tổng Tiền</strong>
                                </span>
                                <input type="text" id="total-amount" name="total_price" readonly><i>Vnd</i>
                            </div>
                        </div>
                        <div class="container">
                            <input type="hidden" value="<?= $product['product_id'] ?>" name="product_id">
                            <input type="hidden" value="<?= $product['product_name'] ?>" name="product_name">
                            <input type="hidden" value="<?= $product['image'] ?>" name="image">
                            <div class="justify-content-center p-1">
                                <button type="submit" class="w-75 btn btn-warning" name="add-cart" onclick="updateFormAction('/client/shop/cart')">Thêm Vào Giỏ Hàng</button>
                            </div>
                        </div>
                        <div class="row w-100 justify-content-center">
                            <button type="submit" name="add-order" class="btn btn-danger" onclick="updateFormAction('/client/shoping/checkout')">Mua Hàng</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    function updateFormAction(action) {
        document.getElementById("cartForm").action = action;
    }

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