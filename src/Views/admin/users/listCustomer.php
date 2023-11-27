<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">

                    <div class="card">
                        <div class="card-header container">
                            <div class="row">
                                <h5>Danh sách tài khoản khách hàng</h5>
                                <span>The DataTables default style file has a number of features which
                                    can be enabled based on the class name of the table. These features
                                    are.</span>
                            </div>
                        </div>
                        <div class="card-block">
                            <form class="dt-reponsive row" method="post" action="">
                                <input type="hidden" name="role_id" value="3">
                                <div class="col-sm-4 col-xl-4 m-b-30">
                                    <h4 class="sub-title">Trạng thái</h4>
                                    <select name="status_id" class="form-control form-control-success">
                                        <option value="" selected>Tất cả</option>
                                        <?php foreach ($status as $statu) : ?>
                                            <option value="<?= $statu['status_user_id'] ?>"><?= $statu['status_user_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="col-sm-4 col-xl-4 m-b-30  header-search">
                                    <h4 class="sub-title">Tìm kiếm</h4>
                                    <div class="main-search morphsearch-search">
                                        <div class="input-group">
                                            <input type="text" name="username" class="form-control" placeholder="Enter Keyword">
                                            <button type="submit" class="btn btn-info" name="btn-search">
                                                <i class="feather icon-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                                <td><img src="/assets/img/avatar/<?= $user['avatar'] ?>" width="100px" - height="100px" alt=""></td>
                                                <td><?= $user['phone'] ?></td>
                                                <td><?= $user['email'] ?></td>
                                                <td><?= $user['address'] ?></td>
                                                <td><?= $user['role_name'] ?></td>
                                                <td>
                                                    <form class="mb-3" action="/admin/users/lock?id=<?= $user['user_id'] ?>" method="post">
                                                        <button type="submit" onclick="return confirm('Bạn có chắc chắn muốn khóa?');" class="btn btn-warning btn-sm">Khóa tài khoản</button>
                                                    </form>
                                                    <?php
                                                    if ($user['status_id'] == 3) { ?>
                                                        <form action="/admin/users/activate?id=<?= $user['user_id'] ?>" method="post">
                                                            <button type="submit" onclick="return confirm('Kích hoạt cho tài khoản này?');" class="btn btn-success btn-sm">Kích hoạt</button>
                                                        </form>
                                                    <?php } ?>
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