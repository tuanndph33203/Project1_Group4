<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Genuine Cosmetics</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <!--link all css here -->
    <?php require_once "components/links.php" ?>
    <!-- all css here -->
</head>

<body>
    <!-- Add your site or application content here -->
    <!--pos page start-->
    <div class="pos_page">
        <div class="container">
            <!--pos page inner-->
            <div class="pos_page_inner">
                <!--header area -->
                <div class="header_area">
                    <!--header top-->
                    <?php include "components/headerTop.php" ?>
                    <!--header top end-->

                    <!--header middel-->
                    <?php include "components/headerMiddel.php" ?>
                    <!--header middel end-->

                    <!--header bottom menu-->
                    <div class="header_bottom">
                        <div class="row">
                            <div class="col-12">
                                <div class="main_menu_inner">
                                    <!-- Default-menu -->
                                    <?php require_once "components/defaultMenu.php" ?>
                                    <!--Mobile-menu -->
                                    <?php require_once "components/mobileMenu.php" ?>
                                </div>
                            </div>
                        </div>
                    </div>
               
                </div>
                <!--header bottom end-->
                <!--header end -->
                <!--main start-->
                <?php require_once $view . '.php'; ?>
                <!--main end -->
            </div>
            <!--pos page inner end-->
        </div>
    </div>
    <!--pos page end-->

    <!--footer area start-->
    <?php include "components/footerTop.php" ?>
    <!--footer area end-->

    <!-- modal area start -->
    <?php include "components/modal.php" ?>
    <!-- modal area end -->

    <!-- all js here -->
    <script src="/assets/js/vendor/jquery-1.12.0.min.js"></script>
    <script src="/assets/js/popper.js"></script>
    <script src="/assets/js/bootstrap.min.js"></script>
    <script src="/assets/js/ajax-mail.js"></script>
    <script src="/assets/js/plugins.js"></script>
    <script src="/assets/js/main.js"></script>
</body>

</html>