<style>
.button {
    color: white;
    padding: 8px;
    border: 1px solid;
    background-color: green;
    border-radius: 5px 5px 5px 5px;
}

.button:hover {
    cursor: pointer;
    background-color: red;
}

.box {
    margin-top: 10px;
    padding: 10px;
    border: 1px solid gray;
    border-radius: 10px 50px;
    text-align: center;
}

.box li {
    list-style-type: none;
    font-size: 20px;
    line-height: 30px;
}

.box h2 {
    font-weight: bold;
}
</style>
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Quản lý hóa đơn</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                        <li class="breadcrumb-item active">DataTables</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Hóa đơn chi tiết</h3>
                        </div>
                        <div class="box">
                            <h2>Thông tin người nhận</h2>
                            <?php extract($one_hoa_don); ?>
                            <ul>
                                <li>Tên người nhận: <strong><?= $ten_nguoi_nhan ?></strong></li>
                                <li>Số điện thoại người nhận: <strong><?= $sdt_nguoi_nhan ?></strong></li>
                                <li>Địa chỉ người nhận: <strong><?= $dia_chi_nguoi_nhan ?></strong></li>
                                <li>Email người nhận: <strong><?= $email_nguoi_nhan ?></strong></li>
                            </ul>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <h4>Thông tin sản phẩm</h4>
                            <table id="example2" class="table table-bordered table-hover">
                                <thead>
                                    <tr>
                                        <th>Id</th>
                                        <th>Mã sản phẩm</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Ảnh sản phẩm</th>
                                        <th>Giá sản phẩm</th>
                                        <th>Số lượng</th>
                                        <th>Thành tiền</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    foreach ($list_hoa_don_ct as $list) {
                                        extract($list);
                                        echo '<tr>
                    <td>' . $id . '</td>
                    <td>' . $id_san_pham . '</td>
                    <td>' . $ten_san_pham . '</td>
                    <td><img src="../img/' . $img_sp . '" style="width: 100px;"></td>
                    <td>' . $gia_san_pham . '$</td>
                    <td>' . $so_luong . '</td>
                    <td>' . $thanh_tien . '</td>
                    </tr>';
                                    }
                                    ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td colspan="6"><strong>Tổng đơn hàng</strong></td>
                                        <td colspan="1"><strong><?= $tong_tien ?></td>
                                    </tr>
                                </tfoot>
                            </table>


                        </div>
                        <!-- /.card-body -->
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container-fluid -->
                <?php
if(is_array($one_hoa_don)){
  extract($one_hoa_don);
}

?>
                <style>
                .card {
                    width: 80%;
                    margin-left: 17%;
                }
                </style>
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Cập nhật trạng thái</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="index.php?act=updatetrangthai" method="POST">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputFile">Trạng thái</label>
                                <select name="status" id="">
                                    <?php if($trang_thai ==0){ ?>


                                    <option value="0" <?php echo $trang_thai == 0 ? 'selected' : '' ?>>Chờ xác nhận
                                    </option>
                                    <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>Đã xác nhận
                                    </option>
                                    <option value="2" <?php echo $trang_thai == 2 ? 'selected' : '' ?>>Đang giao hàng
                                    </option>
                                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng
                                    </option>
                                    <option value="5" <?php echo $trang_thai == 5 ? 'selected' : '' ?>>Hủy đơn hàng
                                    </option>
                                    <?php } elseif($trang_thai ==1){ ?>
                                    <option value="1" <?php echo $trang_thai == 1 ? 'selected' : '' ?>>Đã xác nhận
                                    </option>
                                    <option value="2" <?php echo $trang_thai == 2 ? 'selected' : '' ?>>Đang giao hàng
                                    </option>
                                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng
                                    </option>
                                    <?php } elseif($trang_thai ==2){ ?>
                                    <option value="2" <?php echo $trang_thai == 2 ? 'selected' : '' ?>>Đang giao hàng
                                    </option>
                                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng
                                    </option>
                                    <?php } elseif($trang_thai ==3){ ?>
                                    <option value="3" <?php echo $trang_thai == 3 ? 'selected' : '' ?>>Đã giao hàng
                                    </option>

                                    <?php }  ?>
                                </select>
                            </div>
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="sua" value="Cập nhật trạng thái"
                                onclick="return confirm('Bạn đã cập nhập thành công!!!')">
                            <a href="index.php?act=listhd"><input type="button" value="Trở về danh sách"
                                    class="btn btn-primary"></a>
                        </div>
                    </form>
                </div>
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->