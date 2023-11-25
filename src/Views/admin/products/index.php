<div class="pcoded-content">
    <div class="main-body">
        <div class="page-wrapper">
<<<<<<< HEAD

=======
>>>>>>> cc927054e88b5c7b68e6a817c64422a4c730d429
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Danh Sách Phẩm</h3>
<<<<<<< HEAD
                                <a href="/admin/products/create" class="btn btn-info">Thêm Mới</a> 
                            </div>
                            <div class="card-block">
=======
                                <a href="/admin/products/create" class="btn btn-info">Thêm Mới</a>
                            </div>
                            <div class="card-block">
                                <form class="dt-reponsive row" method="post">
                                    <div class="col-sm-3 col-xl-3 m-b-30">
                                        <h4 class="sub-title">Loại sản phẩm</h4>
                                        <select name="type_id" class="form-control form-control-success">
                                            <option value="" selected>Tất cả</option>
                                            <?php foreach ($types as $type) : ?>
                                                <option value="<?= $type['type_id'] ?>"><?= $type['type_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xl-3 m-b-30">
                                        <h4 class="sub-title">Thương hiệu</h4>
                                        <select name="brand_id" class="form-control form-control-success">
                                            <option value="" selected>Tất cả</option>
                                            <?php foreach ($brands as $brand) : ?>
                                                <option value="<?= $brand['brand_id'] ?>"><?= $brand['brand_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xl-3 m-b-30">
                                        <h4 class="sub-title">Trạng thái</h4>
                                        <select name="status_id" class="form-control form-control-success">
                                            <option value="" selected>Tất cả</option>
                                            <?php foreach ($status as $each) : ?>
                                                <option value="<?= $each['status_id'] ?>"><?= $each['status_name'] ?></option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                    <div class="col-sm-3 col-xl-3 m-b-30  header-search">
                                        <h4 class="sub-title">Tìm kiếm</h4>
                                        <div class="main-search morphsearch-search">
                                            <div class="input-group">
                                                <input type="text" name="product_name" class="form-control" placeholder="Enter Keyword">
                                                <button type="submit" class="btn btn-info" name="btn-search" >
                                                    <i class="feather icon-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
>>>>>>> cc927054e88b5c7b68e6a817c64422a4c730d429
                                <div class="dt-responsive table-responsive">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên</th>
                                                <th>Ảnh</th>
                                                <th>Giá</th>
                                                <th>Ngày Sản Xuất</th>
                                                <th>Hạn Sử Dụng</th>
                                                <th>Loại Sản Phẩm</th>
                                                <th>Hãng</th>
                                                <th>Hành Động</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $i = 1;
                                            foreach ($products as $product) : ?>
                                                <tr>
                                                    <td><?php echo $i;
                                                        $i++; ?></td>
                                                    <td><?= $product['product_name'] ?></td>
<<<<<<< HEAD
                                                    <td><img src="../../../../assets/img/product/<?=$product['image'] ?>" alt="" height="100px "></td>
                                                    <td><?= $product['price'] ?></td>
                                                    <td><?=date('d-m-Y',$product['time_create']) ?></td>
=======
                                                    <td><img src="../../../../assets/img/product/<?= $product['image'] ?>" alt="" height="100px "></td>
                                                    <td><?= $product['price'] ?></td>
                                                    <td><?= date('d-m-Y', $product['time_create']) ?></td>
>>>>>>> cc927054e88b5c7b68e6a817c64422a4c730d429
                                                    <td><?= $product['expiry'] ?> Ngày</td>
                                                    <td><?= $product['type_name'] ?></td>
                                                    <td><?= $product['brand_name'] ?></td>
                                                    <td>
                                                        <a href="/admin/products/update?id=<?= $product['product_id'] ?>" class="btn btn-primary btn-sm">Chi Tiết</a>
                                                        <form action="/admin/products/delete?>" method="post">
                                                            <input type="hidden" value="<?= $product['product_id'] ?>" name="id">
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
    <div id="styleSelector">
    </div>
</div>