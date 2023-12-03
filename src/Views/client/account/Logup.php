<!-- customer login start -->
<div class="customer_login">
    <div class="row">
        <!--login area start-->
        <!-- <div class="col-lg-6 col-md-6">
            <div class="account_form">
                <h2>login</h2>
                <form action="#">
                    <p>
                        <label>Username or email <span>*</span></label>
                        <input type="text">
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password">
                    </p>
                    <div class="login_submit">
                        <button type="submit">login</button>
                        <label for="remember">
                            <input id="remember" type="checkbox">
                            Remember me
                        </label>
                        <a href="#">Lost your password?</a>
                    </div>

                </form>
            </div>
        </div> -->
        <!--login area start-->

        <!--register area start-->
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                <h2>Register</h2>
                <form action="/client/account/Logup" method="post">
                    <p>
                        <label>avatar <span>*</span></label>
                        <input type="file" name="avatar" placeholder="avatar">
                    </p>
                    <p>
                        <label>username <span>*</span></label>
                        <input type="text" name="username" placeholder="username">
                    </p>
                    <p>
                        <label>phone <span>*</span></label>
                        <input type="text" name="phone" placeholder="phone">
                    </p>
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="text" name="email" placeholder="email">
                    </p>

                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="password" placeholder="password">
                    </p>
                    <p>
                        <label>birth_day <span>*</span></label>
                        <input type="text" name="birth_day" placeholder="birth_day">
                    </p>
                    <p>
                        <label>address <span>*</span></label>
                        <input type="text" name="address" placeholder="address">
                    </p>
                    <!-- <p>
                        <label> sex <span>*</span></label>
                        <select name="sex_id " id="sex_id ">
                            <option value="">Chọn giới tính</option>
                            <option value="male">Nam</option>
                            <option value="female">Nữ</option>
                        </select>
                    </p> -->
                    <div class="login_submit">
                        <button type="submit" value="register" name="register">Register</button>
                    </div>
                </form>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>
        </div>
        <!--register area end-->
    </div>
</div>
<!-- customer login end -->

</div>
<!--pos page inner end-->
</div>
</div>