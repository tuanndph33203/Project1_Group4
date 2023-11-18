<div class="pcoded-content">
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
</div>