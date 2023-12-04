<?php
    
    if (isset($data["result"])) {
        if ($data["result"] == "true") {
            echo "Đăng nhập thành công";
        } else {
            echo "Đăng nhập thất bại: " . $data["message"];
        }
    }
    
?>

<div class="customer_login">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                <h2>Login</h2>
                <form action="login" method="POST">
                    <p>
                        <label>username <span>*</span></label>
                        <input type="text" name="username" placeholder="username">
                    </p>
                    <p>
                        <label>Passwords <span>*</span></label>
                        <input type="password" name="password" placeholder="password">
                    </p>
                    <div class="login_submit">
                        <button type="submit" name="submit">Login</button>
                        <a href="/client/account/resetpassword">Lost your password?</a>
                    </div>
                    <p>
                        Do you have account ?  <a href="/client/account/Logup"><b>Logup</b></a>
                    </p>    
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>