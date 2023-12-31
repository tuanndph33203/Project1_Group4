<style>
    .cart_submit {
        background-color: black;
        color: white;
    }
</style>
<div class="breadcrumbs_area">
    <div class="row">
        <div class="col-12">
            <div class="breadcrumb_content">
                <ul>
                    <li><a href="index.html">home</a></li>
                    <li><i class="fa fa-angle-right"></i></li>
                    <li>Shopping Cart</li>
                </ul>

            </div>
        </div>
    </div>
</div>
<!--breadcrumbs area end-->
<!--shopping cart area start -->
<div class="shopping_cart_area">
    <form action="/client/shoping/checkout" method="post">
        <div class="row">
            <div class="col-12">
                <div class="table_desc">
                    <div class="cart_page table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product_remove">Delete</th>
                                    <th class="product_thumb">Image</th>
                                    <th class="product_name">Product</th>
                                    <th class="product_quantity">Quantity</th>
                                    <th class="product-price">Price</th>
                                    <th class="product_total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($_SESSION['cart'] as $product => $value) :
                                    if ($product != null) {
                                ?>
                                        <tr>
                                            <td class="product_remove"><a href="/client/shop/cart/delete?id=<?= $product ?>"><i class="fa fa-trash-o"></i></a></td>
                                            <input type="hidden" name="image">
                                            <td class="product_thumb"><img src="/assets/img/product/<?= $value['image'] ?>" alt="" width="200px" height="200px"></td>
                                            <input type="hidden" name="product_name">
                                            <td class="product_name"><b><?= $value['product_name'] ?></b></td>
                                            <input type="hidden" name="quantity">
                                            <td class="product_quantity">
                                                <a href="/client/shop/cart/decrementQuantity?id=<?= $product ?>" class="btn ">
                                                    <p>-</p>
                                                </a>
                                                <?= $value['quantity'] ?>
                                                <a href="/client/shop/cart/incrementQuantity?id=<?= $product ?>" class="btn">
                                                    <p>+</p>
                                                </a>
                                            </td>
                                            <input type="hidden" name="price">
                                            <td class="product-price"><?= $value['price'] ?></td>
                                            <td></td>
                                        </tr>
                                <?php  }
                                endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="cart_submit">
                        <li>
                            <b> Subtotal : <?php
                                            $pay = 0;
                                            foreach ($_SESSION['cart'] as $product) {
                                                if ($product != null) {
                                                $pay += $product['price'] * $product['quantity'];
                                                }
                                            }

                                            echo ($pay) . "<sup>vnđ</sup>";
                                            ?>
                            </b>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <!--coupon code area start-->
        <div class="coupon_area">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Coupon</h3>
                        <div class="coupon_inner">
                            <p>Enter your coupon code if you have one.</p>
                            <input placeholder="Coupon code" type="text">
                            <button type="submit">Apply coupon</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="coupon_code">
                        <h3>Cart Totals</h3>
                        <div class="coupon_inner">
                            <div class="cart_subtotal">
                                <p>Subtotal</p>
                                <p class="cart_amount">
                                    <?php
                                    $pay = 0;
                                    foreach ($_SESSION['cart'] as $product) {
                                        $pay += $product['price'] * $product['quantity'];
                                    }
                                    echo ($pay) . "<sup>vnđ</sup>";
                                    ?>
                                </p>
                            </div>
                            <div class="cart_subtotal ">
                                <p>Shipping</p>
                                <p class="cart_amount"><span>Flat Rate:</span> 50.000 <sup>vnđ</sup></p>
                            </div>
                            <a href="#">Calculate shipping</a>
                            <div class="cart_subtotal">
                                <p>Total</p>
                                <p class="cart_amount">
                                    <?php
                                    $total = 0;
                                    foreach ($_SESSION['cart'] as $product) {
                                        $total = $pay + 50000;
                                    }
                                    echo ($total) . "<sup>vnđ</sup>";
                                    ?>
                                </p>
                            </div>
                            <div class="checkout_btn">
                                <button name="add-order">Proceed to Checkout</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--coupon code area end-->
    </form>
</div>