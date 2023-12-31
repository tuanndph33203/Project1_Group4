<div class="pcoded-content">
    <div class="main-body">
        <div class="page-wrapper">
            <div class="page-body">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3>Danh Sách Bình Luận</h3>
                            </div>
                            <div class="card-block">
                                <form class="dt-reponsive row" method="post">

                                    <div class="col-sm-3 col-xl-3 m-b-30  header-search">
                                        <h4 class="sub-title">Tìm kiếm</h4>
                                        <div class="main-search morphsearch-search">
                                            <div class="input-group">
                                                <input type="text" name="product_name" class="form-control" placeholder="Enter Keyword">
                                                <button type="submit" class="btn btn-info" name="btn-search">
                                                    <i class="feather icon-search"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="dt-responsive table-responsive">
                                    <table id="dom-jqry" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th>ID</th>
                                                <th>NỘI DUNG</th>
                                                <th>USER_ID</th>
                                                <th>PRODUCT_ID</th>
                                                <th>NGÀY BÌNH LUẬN</th>
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
                                                    <td><img src="/assets/img/product/<?= $product['image'] ?>" alt="" height="100px "></td>
                                                    <td><?= date('d-m-Y', $product['time_create']) ?></td>
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