<?php

if (isset($data["result"])) {
    if ($data["result"] == "true") {
        echo "Đăng nhập thành công";
    } else {
        echo "Đăng nhập thất bại: " . $data["message"];
    }
}

?>

<?php
if (isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "admin" && $password == "admin123") {
        $_SESSION['user'] = "admin";
        header("Location: admin.php");
        exit();
    } elseif ($username == "user" && $password == "user123") {
        $_SESSION['user'] = "user";
        header("Location: user.php");
        exit();
    } else {
        echo "Không hợp lệ";
    }
}
?>

<div class="customer_login">
    <div class="row">
        <div class="col-lg-6 col-md-6">
            <div class="account_form register">
                <h2>Login</h2>
                <form action="client/account/login" method="POST">
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
                        Do you have account ? <a href="/client/account/Logup"><b>Logup</b></a>
                    </p>
                </form>
            </div>
        </div>
    </div>
</div>

</div>
</div>
</div>