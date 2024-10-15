<style>
    /* General Body Settings */
body {
    font-family: 'Arial', sans-serif;
    background-color: #f9f9f9;
    margin: 0;
    padding: 0;
    color: #333;
}

/* Header */
.signin-header {
    background-color: #ffffff;
    padding: 20px 0;
    border-bottom: 1px solid #eee;
}

.site-logo img {
    max-height: 50px; /* Adjust based on your logo's original size */
}

.singin-header-btn {
    text-align: right;
    padding-right: 30px;
}

.singin-header-btn p {
    margin: 0;
    display: inline-block;
    padding-right: 10px;
}

.sign-up-btn {
    background-color: #e91e63;
    color: #ffffff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    text-decoration: none;
}

/* Signin Banner */
.axil-signin-banner {
    background-color: #fff0f3;
    padding: 50px 30px;
    text-align: center;
}

.bg_image--10 {
    background-image: url('path/to/your/background-image.jpg');
    background-size: cover;
    background-position: center;
}

/* Form styling */
.axil-signin-form-wrap {
    padding: 50px;
    background-color: #fff;
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.axil-signin-form h3 {
    color: #333;
}

.b2 {
    font-size: 14px;
    color: #666;
}

.form-group label {
    font-weight: bold;
    color: #333;
    display: block;
    margin-bottom: 5px;
}

.form-control {
    width: 100%;
    padding: 10px;
    margin-bottom: 20px;
    border: 1px solid #ccc;
    border-radius: 5px;
}

.submit-btn {
    width: 100%;
    background-color: #4CAF50;
    color: white;
    border: none;
    padding: 10px;
    border-radius: 5px;
    cursor: pointer;
}

.submit-btn:hover {
    background-color: #45a049;
}

/* Responsive adjustments */
@media (max-width: 768px) {
    .singin-header-btn {
        text-align: center;
        padding: 20px 0;
    }

    .axil-signin-banner, .axil-signin-form-wrap {
        margin-bottom: 20px;
    }
}
/* Thêm kiểu cho nút reset mặc định */
input[type="reset"] {
    background-color: #f8f9fa; /* Màu nền ban đầu */
    color: #333; /* Màu chữ ban đầu */
    border: 1px solid #ccc; /* Viền */
    padding: 8px 16px; /* Đệm */
    cursor: pointer; /* Con trỏ chuột */
    transition: background-color 0.3s ease; /* Chuyển đổi mượt mà */
}

/* Thêm hiệu ứng khi hover */
input[type="reset"]:hover {
    background-color: #e2e6ea;
}
a {
    color: #007bff; /* Blue color for links */
    text-decoration: none; /* No underline by default */
    transition: color 0.3s ease; /* Smooth color transition */
}

a:hover {
    color: #0056b3; /* Darker blue on hover */
    text-decoration: underline; /* Underline on hover */
}

</style>
<!-- 
    <div class="axil-signin-area"> -->

        <!-- Start Header -->
        <div class="signin-header">
            <div class="row align-items-center">
                <div class="col-sm-4">
                    <a href="index.php" class="site-logo"><img src="img/logo/logo2.png" alt="logo"></a>
                </div>
                <div class="col-sm-8">
                    <div class="singin-header-btn">
                        <p>Bạn chưa phải là thành viên?</p>
                        <a href="index.php?act=fomdangky" class="axil-btn btn-bg-secondary sign-up-btn">Đăng ký thành viên</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header -->

        <div class="row">
            <div class="col-xl-4 col-lg-6">
                <div class="axil-signin-banner bg_image bg_image--9">
                    <h3 class="title">We Offer the Best Products</h3>
                    <img src="img/logodangnhap.jpg" alt="" >
                </div>
                
            </div>
            <div class="col-lg-6 offset-xl-2">
                <div class="axil-signin-form-wrap">
                    <div class="axil-signin-form">
                        <h3 class="title">Quên mật khẩu</h3>
                        <p class="b2 mb--55">Nhập địa chỉ email vào form để xem mật khẩu</p>
                        <form class="singin-form" action="index.php?act=quenmk" method="POST" >
                            <div class="form-group">
                                <label>Nhập địa chỉ email</label>
                                <input type="email" class="form-control" name="email" >
                            </div>
                            <div class="form-group d-flex align-items-center justify-content-between">
                                <input type="submit" name="guiemail" class="axil-btn btn-bg-primary submit-btn" value="Gửi">
                                <input type="reset"  value="Nhập lại">
                            </div>
                        </form>
                        <?php
                        if(isset($thongbao)&&($thongbao!="")){
                            echo $thongbao;
                        }
                        ?>
                    </div>
                </div>
                <a href="index.php?act=dangnhap1">Quay lại đăng nhập</a>
            </div>
        </div>