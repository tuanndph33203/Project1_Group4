<?php

session_start();
$product_id = $_REQUEST['product_id'];

use Group4\BaseMvc\Models\comment;

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicon.png">

    <!-- all css here -->
    <link rel="stylesheet" href="/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css/plugin.css">
    <link rel="stylesheet" href="/assets/css/bundle.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive.css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
</head>

<body>
    <div class="comments_area">
        <div class="comments__title">
            <h3>Leave a Reply </h3>
        </div>
        <div class="comments__notes">
            <p>Your email address will not be published.</p>
        </div>
        <div class="product_review_form blog_form">
            <form action="#">
                <div class="row">
                    <div class="col-12">
                        <form action="<?= $_SERVER['PHP_SELF']; ?>" method="POST">
                            <input type="hidden" name="product_id" value="<?= $product_id ?>">
                            <label for="review_comment">comment </label>
                            <textarea name="comment" id="review_comment"></textarea>
                    </div>
                </div>
                <button type="submit">Post Comment</button>
            </form>
        </div>

    </div>
</body>

</html>