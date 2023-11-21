<div class="pcoded-content">
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">

                        <div class="card">
                            <div class="card-header">
                                <h3>Danh Sách Phẩm</h3>
                                <a href="/admin/products/create" class="btn btn-info">Thêm Mới</a>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>STT</th>
                                                <th>Tên</th>
                                                <th>Ảnh</th>
                                                <th>Giá</th>
                                                <th>Mô Tả</th>
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
                                                    <td><?= $product['name'] ?></td>
                                                    <td><img src="../../../../assets/img/product/<?=$product['image'] ?>" alt="" width="100px "></td>
                                                    <td><?= $product['price'] ?></td>
                                                    <td><?= $product['description'] ?></td>
                                                    <td><?= $product['type_name'] ?></td>
                                                    <td><?= $product['brand_name'] ?></td>
                                                    <td>
                                                        <a href="/admin/categories/update?type_id=<?= $product['type_id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>
                                                        <form action="/admin/categories/delete?>" method="post">
                                                            <input type="hidden" value="<?= $product['type_id'] ?>" name="type_id">
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