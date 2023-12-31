<div class="pcoded-content">
    <div class="card">
        <div class="card-header ">
            <h3>Category List</h3>
            <a href="/admin/categories/create" class="btn btn-info">Thêm Mới</a>
        </div>
        <div class="card-block">
            <div class="table-responsive dt-responsive">
                <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID Loại</th>
                            <th>Tên Loại</th>
                            <th>Hành Động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                        foreach ($categories as $category) : ?>
                            <tr>
                                <td><?php echo $i;$i++; ?></td>
                                <td><?= $category['type_id'] ?></td>
                                <td><?= $category['type_name'] ?></td>
                                <td>
                                    <a href="/admin/categories/update?type_id=<?= $category['type_id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                                    <form action="/admin/categories/delete?>" method="post">
                                        <input type="hidden" value="<?= $category['type_id'] ?>" name="type_id">
                                        <button type="submit" onclick="return confirm('Bạn có chắc chắn xóa?');" class="btn btn-danger btn-sm">Xóa</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>