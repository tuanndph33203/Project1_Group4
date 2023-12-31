<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">

                    <div class="d-inline">
                        <i class="feather icon-edit bg-c-blue"></i>
                        <h5>Sửa Sản Phẩm</h5>
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
                                <div class="card-header">
                                    <h5>Điền Vào Thông Tin Sản Phẩm</h5>
                                    <span>Add class of <code>.form-control</code> with
                                        <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <form action="" method="post" enctype="multipart/form-data">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <input name="name" value="<?= $product['product_name'] ?>" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ảnh Cũ</label>
                                            <div class="col-sm-10">
                                                <img class="rounded border border-secondary" src="/assets/img/product/<?= $product['image'] ?>" alt="" height="200px">
                                            </div>
                                            <label class="col-sm-2 col-form-label">Chọn Ảnh Mới</label>
                                            <div class="col-sm-10">
                                                <input name="image" type="file" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mô Tả</label>
                                            <div class="col-sm-10">
                                                <textarea required name="description" rows="5" cols="5" class="form-control" placeholder="Mô tả sản phẩm"><?= $product['description'] ?>"</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Hạn sử dụng</label>
                                            <div class="col-sm-4">
                                                <input name="expiry" value="<?= $product['expiry'] ?>" min="1" type="number" class="form-control" placeholder="Nhập vào hạn ngày sử dụng" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label"><i>Ngày</i></label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Đơn vị đo lường</label>
                                            <div class="col-sm-10">
                                                <select name="unit_id" class="form-control" required>
                                                    <?php foreach ($units as $unit) : ?>
                                                        <option <?php if ($unit['unit_id'] == $product['unit_id']) {
                                                                    echo 'selected';
                                                                } ?> value="<?= $unit['unit_id'] ?>"><?= $unit['unit_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Dùng được cho loại da</label>
                                            <div class="col-sm-10">
                                                <select name="skin_id" class="form-control" required>
                                                    <?php foreach ($skins as $skin) : ?>
                                                        <option <?php if ($skin['skin_id'] == $product['skin_id']) {
                                                                    echo 'selected';
                                                                } ?> value="<?= $skin['skin_id'] ?>"><?= $skin['skin_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Loại Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <select name="type_id" class="form-control" required>
                                                    <?php foreach ($types as $type) : ?>
                                                        <option <?php if ($type['type_id'] == $product['type_id']) {
                                                                    echo 'selected';
                                                                } ?> value="<?= $type['type_id'] ?>"><?= $type['type_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Hãng Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <select name="brand_id" class="form-control" required>
                                                    <?php foreach ($brands as $brand) : ?>
                                                        <option <?php if ($brand['brand_id'] == $product['brand_id']) {
                                                                    echo 'selected';
                                                                } ?> value="<?= $brand['brand_id'] ?>"><?= $brand['brand_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Trạng Thái Sản Phẩm</label>
                                            <div class="col-sm-4">
                                                <select name="status_id" class="form-control">
                                                    <?php foreach ($status as $each) : ?>
                                                        <option <?php if ($each['status_id'] == $product['status_id']) {
                                                                    echo 'selected';
                                                                } ?> value="<?= $each['status_id'] ?>"><?= $each['status_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-sm-2">
                                                <button type="submit" name="btn-submit" class="btn btn-info mt-3">Sửa Đổi</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                                <div class="card-header">
                                    <h5>Thêm thông tin sản phẩm theo trọng lượng</h5>
                                    <span>Add class of <code>.form-control</code> with
                                        <code>&lt;input&gt;</code> tag</span>
                                </div>
                                <div class="card-block">
                                    <div class="row">
                                        <label class="col-sm-2 col-form-label">Danh sách khối lượng</label>
                                        <table class="col-sm-6 table table-striped table-bordered" id="example-1">
                                            <thead>
                                                <tr>
                                                    <th>Khối lượng</th>
                                                    <th>Giá</th>
                                                    <th>Số lượng kho</th>
                                                    <th>Thao tác</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                foreach ($product_details as $product_detail) {   ?>
                                                    <form action="/admin/products/products_detail/update" method="post">
                                                        <tr>
                                                            <td class="tabledit-view-mode">
                                                                <input type="hidden" name="size_old" value="<?= $product_detail['size'] ?>">
                                                                <input type="number" name="size" value="<?= $product_detail['size'] ?>">
                                                                <?php
                                                                foreach ($units as $unit) {
                                                                    if ($unit['unit_id'] == $product['unit_id']) {
                                                                        echo $unit['unit_name'];
                                                                    }
                                                                } ?>
                                                            </td>
                                                            <td class="tabledit-view-mode">
                                                                <input type="number" name="price" value="<?= $product_detail['price'] ?>">
                                                                <i>Vnd</i>
                                                            </td>
                                                            <td class="tabledit-view-mode">
                                                                <input type="number" name="quantity" value="<?= $product_detail['quantity'] ?>">
                                                            </td>
                                                            <td>
                                                                <input type="hidden" name="product_id" value="<?=$product['product_id'] ?>">
                                                                <button class="btn btn-warning" type="submit" name="btn-update">Sửa</button>
                                                                <a class="btn btn-danger" href="/admin/products/products_detail/delete?id=<?=$product['product_id'] ?>&size=<?= $product_detail['size'] ?>">Xóa</a>
                                                            </td>
                                                        </tr>
                                                    </form>
                                                <?php } ?>
                                            </tbody>
                                        </table>
                                    </div>
                                    <form action="/admin/products/products_detail/create" method="post">
                                        <div class="row">
                                            <label class="col-sm-2 col-form-label">Thêm khối lượng cho sản phẩm</label>
                                            <table class="col-sm-6 table table-striped table-bordered" id="example-1">
                                                <thead>
                                                    <tr>
                                                        <th>Khối lượng</th>
                                                        <th>Giá</th>
                                                        <th>Số lượng kho</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <td class="tabledit-view-mode">
                                                        <input class="tabledit-input form-control input-sm" type="text" name="size" min="1">
                                                    </td>
                                                    <td class="tabledit-view-mode">
                                                        <input class="tabledit-input form-control input-sm" type="text" name="price" min="1">
                                                    </td>
                                                    <td class="tabledit-view-mode">
                                                        <input class="tabledit-input form-control input-sm" type="text" name="quantity" min="">
                                                    </td>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-2">
                                                <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                                                <button type="submit" name="btn-create" class="btn btn-info mt-3">Thêm kích thước</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>
</div>