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
                            <th>Chủ Đề</th>
                            <th>Ảnh</th>
                            <th>Ngày Tạo</th>
                            <th>Ngày Sửa</th>
                            <th>Thao Tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($posts as $key => $post) { ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $post['title'] ?></td>
                                <td><?= $post['image'] ?></td>
                                <td><?= $post['created_at'] ?></td>
                                <td><?= $post['updated_at'] ?></td>
                                <td>
                                    <div class="container">
                                        <div class="row p-3">
                                            <a class="btn btn-danger">Xóa Bài Viết</a>
                                        </div>
                                        <div class="row">
                                            <a href="/admin/post/update" class="btn btn-info">Xem Chi Tiết Bài</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>