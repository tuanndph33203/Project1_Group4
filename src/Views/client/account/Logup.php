<div class="customer_login">
    <div class="row">
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
                        <input type="password" name="password">
                    </p>
                    <p>
                        <label>Phone <span>*</span></label>
                        <input type="text" name="phone"> 
                    </p>
                    <p>
                        <label>Email <span>*</span></label>
                        <input type="text" name="email">
                    </p>
                    
                    <div class="login_submit">
                        <button type="submit" name="submit">Register</button>
                        <a href="/client/account/resetpassword">Lost your password?</a>
                    </div>
                    <p>
                        Do you have account ?  <a href="/client/account"><b>Login</b></a>
                    </p>    
                </form>
                <?php
                if (isset($thongbao) && ($thongbao != "")) {
                    echo $thongbao;
                }
                ?>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>