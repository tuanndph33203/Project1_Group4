<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">

                    <div class="d-inline">
                        <i class="feather icon-clipboard bg-c-blue"></i>
                        <h5>Thêm Sản Phẩm</h5>

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
                                                <input name="name" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm" required>                           </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ảnh Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <input name="image" type="file" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Giá Sản Phẩm</label>
                                            <div class="col-sm-4">
                                                <input name="price" type="text" class="form-control" placeholder="Nhập vào tên sản phẩm" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label"><i>Vnd</i></label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Mô Tả</label>
                                            <div class="col-sm-10">
                                                <textarea required name="description" rows="5" cols="5" class="form-control" placeholder="Mô tả sản phẩm"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Hạn sử dụng</label>
                                            <div class="col-sm-4">
                                                <input name="expiry" type="number" min="1" class="form-control" placeholder="Nhập vào hạn ngày sử dụng" required>
                                            </div>
                                            <label class="col-sm-2 col-form-label"><i>Ngày</i></label>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Dùng được cho loại da</label>
                                            <div class="col-sm-10">
                                                <select name="skin_id" class="form-control" required>
                                                    <?php foreach ($skins as $skin) : ?>
                                                        <option value="<?= $skin['skin_id'] ?>"><?= $skin['skin_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Loại Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <select name="type_id" class="form-control" requireds>
                                                    <?php foreach ($types as $type) : ?>
                                                        <option value="<?= $type['type_id'] ?>"><?= $type['type_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Hãng Sản Phẩm</label>
                                            <div class="col-sm-10">
                                                <select name="brand_id" class="form-control" required>
                                                    <?php foreach ($brands as $brand) : ?>
                                                        <option value="<?= $brand['brand_id'] ?>"><?= $brand['brand_name'] ?></option>
                                                    <?php endforeach; ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-sm-10"></div>
                                            <div class="col-sm-2">
                                                <button type="submit" name="btn-submit" class="btn btn-info mt-3">Thêm</button>
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