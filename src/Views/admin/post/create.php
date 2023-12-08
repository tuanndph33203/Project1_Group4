<div class="pcoded-content">
    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <div class="d-inline">
                        <i class="feather icon-sidebar bg-c-blue"></i>
                        <h5>Thêm Bài Đăng</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="page-header-breadcrumb">
                    <ul class=" breadcrumb breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="/admin"><i class="feather icon-home"></i></a>
                        </li>
                        <li class="breadcrumb-item"><a href="/admin/post">Danh Sách</a>
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
                                        <h5>Tạo Bài Đăng</h5>
                                        <span>Add class of <code>.form-control</code> with
                                            <code>&lt;input&gt;</code> tag</span>
                                    </div>
                                    <div class="card-block">
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Tiêu Đề Bài Đăng</label>
                                            <div class="col-sm-10">
                                                <input name="title" type="text" class="form-control" placeholder="Nhập vào chủ đề" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Ảnh Bài Đăng</label>
                                            <div class="col-sm-10">
                                                <input name="image" type="file" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-sm-2 col-form-label">Nội Dung Bài Viết</label>
                                            <div class="col-sm-4">
                                                <textarea name="content" id="" cols="40" rows="5"></textarea>
                                            </div>
                                        </div>
                                        <div class="row form-group">
                                            <button type="submit" name="add_post" class="btn btn-info">Thêm Bài Viết</button>
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