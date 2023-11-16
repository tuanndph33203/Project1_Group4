<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category UPdate</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Cập nhật Category</h1>
        <form action="" method="post">
            <label for="name">Name</label>
            <?php if (is_array($category)) {?>
                <input type="text" name="name" class="form-control" value="<?= $category['type_name'] ?>">
            <?php } else { ?>
                <br>
                <span>ID Loại sản phẩm không có</span>
                <br>
            <?php } ?>
            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Submit</button>
            <a href="/admin/categories" class="btn btn-primary mt-3">Quay lại d/s</a>
        </form>
    </div>
</body>

</html>