<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Admindek Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="flat ui, admin Admin , Responsive, Landing, Bootstrap, App, Template, Mobile, iOS, Android, apple, creative app">
    <meta name="author" content="colorlib" />

    <!-- links all css js icon -->
    <?php require_once "components/linkCss.php" ?>
</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Navbar-header star-->
            <?php require_once "components/navbarHead.php" ?>
            <!-- Navbar-header end-->

            <!-- Admin-users-info star -->
            <?php require_once "components/user.php" ?>
            <!-- Admin-users-info end -->

            <!-- Show chat star -->
            <?php require_once "components/showChat.php" ?>
            <!-- Show chat end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- navbar-pcoded star -->
                    <?php require_once "components/navbarPcoded.php" ?>
                    <!-- navbar-pcoded end -->

                    <!-- main-pcoded star -->
                    <?php require_once $view . '.php'; ?>
                     <!-- main-pcoded end -->

                    <div id="styleSelector">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- scrip src star -->
    <?php require_once "components/scripSrc.php" ?>
    <!-- scrip src end -->
</body>

</html>