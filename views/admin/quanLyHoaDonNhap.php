<!--Start topbar header-->
<?php include '../admin/header.php'
?>
<div class="content-wrapper">

    <div class="row mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hóa đơn nhập</h5><button class="btn" style="background-color: aliceblue;margin-bottom:10px;" type="button">Thêm</button>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Mã hóa đơn nhập</th>
                                    <th scope="col">Mã nhà cung cấp</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Ngày nhập hàng</th>
                                    <th scope="col">Ghi chú</th>
                                    <th scope="col">Sửa/Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once '../../models/ketnoi.php';
                                $sql = "SELECT * FROM hoadonnhap Order by MaHoaDonNhap ASC";
                                $query = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($query);
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo 
                                        "<tr>
                                        <th scope=".'row'.">".$row["MaHoaDonNhap"]."</th>
                                        <td>".$row["MaNCC"]."</td>
                                        <td>".$row["UserName"]."</td>
                                        <td>".$row["NgayNhapHang"]."</td>
                                        <td>".$row["GhiChu"]."</td>
                                        </tr>";
                                    }
                                  }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?php include '../admin/footer.php' ?>