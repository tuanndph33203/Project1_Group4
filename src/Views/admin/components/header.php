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
    <link rel="icon" href="../../../../../assets/admin_files/assets/images/favicon.ico" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="../../../../../assets/admin_files/bower_components/bootstrap/css/bootstrap.min.css">

    <link rel="stylesheet" href="../../../../../assets/admin_files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../../../../../assets/admin_files/assets/icon/feather/css/feather.css">

    <link rel="stylesheet" type="text/css" href="../../../../../assets/admin_files/assets/css/font-awesome-n.min.css">

    <link rel="stylesheet" href="../../../../../assets/admin_files/bower_components/chartist/css/chartist.css" type="text/css" media="all">

    <link rel="stylesheet" type="text/css" href="../../../../../assets/admin_files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="../../../../../assets/admin_files/assets/css/widget.css">

</head>

<body>

    <div class="loader-bg">
        <div class="loader-bar"></div>
    </div>

    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!-- Navbar-header star-->
            <?php require_once "nav/navbarHead.php" ?>
            <!-- Navbar-header end-->

            <!-- Admin-users-info star -->
            <?php require_once "nav/user.php" ?>
            <!-- Admin-users-info end -->

            <!-- Show chat star -->
            <?php require_once "nav/showChat.php" ?>
            <!-- Show chat end -->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- navbar-pcoded star -->
                    <?php require_once "nav/navbarPcoded.php" ?>
                    <!-- navbar-pcoded end -->
