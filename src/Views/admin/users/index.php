<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">

                    <div class="card">
                        <div class="card-header container">
                            <div class="row">
                                <div class="col-sm-10">
                                    <h5>Danh sách tài khoản nhân viên</h5>
                                    <span>The DataTables default style file has a number of features which
                                        can be enabled based on the class name of the table. These features
                                        are.</span>
                                </div>
                                <div class="col-sm-2">
                                    <a href="/admin/users/create" class="btn btn-info">Thêm Mới</a>
                                </div>
                            </div>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="base-style" class="table table-striped table-bordered nowrap">
                                    <thead>
                                        <tr>
                                            <th>Tên</th>
                                            <th>Ảnh đại diện</th>
                                            <th>Số Điện Thoại</th>
                                            <th>Email</th>
                                            <th>Địa chỉ</th>
                                            <th>Vai trò</th>
                                            <th>Action</th>
                                        </tr>

                                    </thead>
                                    <tbody>
                                        <?php foreach ($users as $user) : ?>
                                            <tr>
                                                <td><?= $user['username'] ?></td>
                                                <td><img src="/assets/img/avatar/<?= $user['avatar'] ?>" width="100px"- height="100px" alt=""></td>
                                                <td><?= $user['phone'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= $user['address'] ?></td>
                                                <td><?= $user['role_name'] ?></td>
                                                <td>
                                                    <a href="/admin/users/update?id=<?= $user['user_id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                    <form action="/admin/users/delete?id=<?= $user['user_id'] ?>" method="post">
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

            </div>
        </div>
    </div>
</div>