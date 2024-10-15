<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="path/to/boxicons.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <!-- My CSS -->
    <link rel="stylesheet" href="admincss/css/style.css">
    <link rel="stylesheet" href="admincss/css/listing.css">
    <link rel="stylesheet" href="admincss/css/liststyle.css">

    <title>UniQue</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-alarm-add	'></i>
            <span class="text">ADMIN</span>
        </a>
        <ul class="side-menu top">
            <li class="">
                <a href="index.php?act=home">
                    <i class='bx bxs-dashboard'></i>
                    <span class="text">Trang Chủ</span>
                </a>
            </li>


            <li class="">
                <a href="index.php?act=listdm">
                    <i class='bx bxs-category'></i>
                    <span class="text">Danh Mục</span>
                </a>
            </li>

            <li class="">
                <a href="index.php?act=listsp">
                    <i class='bx bxs-shopping-bag'></i>
                    <span class="text">Sản Phẩm</span>
                </a>
            </li>

            <li class="">
                <a href="index.php?act=listnd">
                    <i class='bx bxs-group'></i>
                    <span class="text">Khách Hàng</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?act=listbl">
                    <i class='bx bxs-message-dots'></i>
                    <span class="text">Bình Luận</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?act=listhd">
                    <i class='bx bxs-shopping-bag-alt'></i>
                    <span class="text">Quản Lý Đơn Hàng</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?act=listthongke">
                    <i class='bx bxs-doughnut-chart'></i>
                    <span class="text">Thống Kê Doanh Thu</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?act=listcv">
                    <i class='bx bxs-chart'></i>
                    <span class="text">Quản lý chức vụ</span>
                </a>
            </li>
            <li class="">
                <a href="index.php?act=listbv">
                    <i class='bx bxs-chart'></i>
                    <span class="text">Quản lý bài viết</span>
                </a>
            </li>

            <li class="">
                <a href="../index.php" class="brand-link">
                    <i class='bx bxs-user'></i>
                    <span class="text">Trang Người Dùng</span>
                </a>
            </li>

        </ul>

    </section>
    <section id="content">
        <nav>
            <i class='bx bx-menu'></i>

            <form action="#">
                <div class="form-input">
                    <input type="search" placeholder="Search...">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>


            </ul>
        </nav>