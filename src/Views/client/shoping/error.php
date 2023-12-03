<div class="main_blog_area blog_details">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="alert alert-danger text-center" role="alert">
                    <h1>Lỗi khi mua hàng!</h1>
                    <p>Xin lỗi, đã xảy ra lỗi khi xử lý đơn hàng của bạn. Vui lòng thử lại sau.</p>
                    <span>Sẽ chuyển trang sau 10s</span>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    setTimeout(function() {
        // Chuyển hướng hoặc đóng trang sau 10 giây
        window.location.href = "/"; // Thay đổi URL tới trang mới hoặc sử dụng window.close() để đóng trang hiện tại
    }, 10000); // 10000 milliseconds = 10 giây
</script>