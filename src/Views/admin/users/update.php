<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <i class="feather icon-clipboard bg-c-blue"></i>
                        <h5>Sửa Tài Khoản</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/products">Danh Sách</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="card-header">
                                        <h5>Điền Vào Thông Tin Cá Nhân</h5>
                                        <span>Add class of <code>.form-control</code> with
                                            <code>&lt;input&gt;</code> tag</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tên Nhân Viên</label>
                                            <div class="col-sm-10">
                                                <input name="user_name" value="<?= $user['username'] ?>" type="text" class="form-control" placeholder="Nhập vào tên người dùng" required>
                                            </div>
                                        </div>
                                        <div class="form-group container">
                                            <div class="row">
                                                <input type="hidden" value="<?= $user['avatar'] ?>" name="avatar_old">
                                                <label class="col-sm-2 col-form-label">Ảnh Đại Diện Cũ</label>
                                                <img class="rounded border border-secondary" src="/assets/img/product/<?= $user['avatar'] ?>" alt="" height="200px">
                                            </div>
                                            <div class="row">
                                                <label class="col-sm-2 col-form-label">Chọn Ảnh Mới</label>
                                                <div class="col-sm-10">
                                                    <input name="image" type="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Số điện thoại</label>
                                            <div class="col-sm-4">
                                                <input name="phone" type="text" value="<?= $user['phone'] ?>" class="form-control" placeholder="Số Điện Thoại" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ngày sinh</label>
                                            <div class="col-sm-4">
                                                <input name="birth_day" type="date" value="<?= $user['birth_day'] ?>" class="form-control" placeholder="Nhập vào ngày sinh" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Địa Chỉ</label>
                                            <div class="col-sm-10">
                                                <textarea required name="address" rows="5" cols="5" class="form-control" placeholder="Địa chỉ"><?= $user['address'] ?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-header">
                                        <h5>Điền Vào Thông Tin Tài Khoản</h5>
                                    </div>
                                    <div class="card-block">
                                        <div class="form-group row justify-content-between px-3">

                                            <div class="col-sm-5">
                                                <label class="row">Email đăng nhập</label>
                                                <div class="row">
                                                    <input name="email" type="text" value="<?= $user['email'] ?>" class="form-control" placeholder="Email" required>
                                                </div>
                                            </div>
                                            <div class="col-sm-5">
                                                <label class="row">Mật khẩu</label>
                                                <div class="row">
                                                    <input name="password" type="text" class="form-control" placeholder="Password" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row justify-content-between px-3">
                                            <div class="col-sm-3">
                                                <label class="row">Giới tính</label>
                                                <div class="row">
                                                    <select name="sex_id" class="form-control" required>
                                                        <?php foreach ($sexs as $sex) : ?>
                                                            <option <?php if ($sex['sex_id'] == $user['sex_id']) {
                                                                        echo 'checked';
                                                                    } ?> value="<?= $sex['sex_id'] ?>"><?= $sex['sex_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="row">Chức vụ</label>
                                                <div class="row">
                                                    <select name="role_id" class="form-control" requireds>
                                                        <option <?php if ($user['role_id'] == 2) {
                                                            echo 'checked';
                                                        } ?> value="2">Nhân viên</option>
                                                        <option <?php if ($user['role_id'] == 1) {
                                                            echo 'checked';
                                                        } ?> value="1">Quản trị viên</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <label class="row">Trạng thái</label>
                                                <div class="row">
                                                    <select name="status_id" class="form-control" required>
                                                        <?php foreach ($status as $statu) : ?>
                                                            <option <?php if ($statu['status_user_id'] == $user['status_id']) {
                                                                        echo 'checked';
                                                                    } ?> value="<?= $statu['status_user_id'] ?>"><?= $statu['status_user_name'] ?></option>
                                                        <?php endforeach; ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <button type="submit" name="btn-submit" class="btn btn-info mt-3">Sửa</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="styleSelector"></div>
    </div>
</div>