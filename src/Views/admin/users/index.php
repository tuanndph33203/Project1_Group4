<div class="pcoded-inner-content">
    <div class="main-body">
        <div class="page-wrapper">

            <div class="page-body">

                <div class="card">
                    <div class="card-header">
                        <h5>Base Style</h5>
                        <span>The DataTables default style file has a number of features which
                            can be enabled based on the class name of the table. These features
                            are.</span>
                    </div>
                    <div class="card-block">
                        <div class="dt-responsive table-responsive">
                            <table id="base-style" class="table table-striped table-bordered nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Address</th>
                                        <th>Password</th>
                                        <th>Action</th>
                                    </tr>

                                </thead>
                                <tbody>
                                    <?php foreach ($users as $user) : ?>
                                        <tr>
                                            <td><?= $user['id'] ?></td>
                                            <td><?= $user['name'] ?></td>
                                            <td><?= $user['email'] ?></td>
                                            <td><?= $user['address'] ?></td>
                                            <td><?= $user['password'] ?></td>
                                            <td>
                                                <a href="/admin/users/update?id=<?= $user['id'] ?>" class="btn btn-primary btn-sm">Cập nhật</a>

                                                <form action="/admin/users/delete?id=<?= $user['id'] ?>" method="post">
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