<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Category List</title>

    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <div class="container">
        <h1>Category List</h1>

        <a href="/admin/categories/create" class="btn btn-info">Thêm</a>

        <table class="table">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            <?php 
            foreach ($categories as $category) : ?>
                <tr>
                    <td><?= $category['type_id'] ?></td>
                    <td><?= $category['type_name'] ?></td>
                    <td>
                        <a href="/admin/categories/update?type_id=<?= $category['type_id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                        <form action="/admin/categories/delete?>" method="post">
                            <input type="hidden" value="<?= $category['type_id']?>" name="type_id">
                            <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" 
                            class="btn btn-danger btn-sm">Xóa</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>

        </table>
    </div>
</body>

</html>