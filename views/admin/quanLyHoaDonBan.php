<!--Start topbar header-->
<?php include '../admin/header.php'
?>
<div class="content-wrapper">

    <div class="row mt-3">

        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Hóa đơn bán</h5><button class="btn" style="background-color: aliceblue;margin-bottom:10px;" type="button">Thêm</button>
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Mã hóa đơn</th>
                                    <th scope="col">Ngày lập</th>
                                    <th scope="col">Username</th>
                                    <th scope="col">Mã bàn</th>
                                    <th scope="col">giảm giá</th>
                                    <th scope="col">Phương thức thanh toán</th>
                                    <th scope="col">Ghi chú</th>
                                    <th scope="col">Sửa/Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                include_once '../../models/ketnoi.php';
                                $sql = "SELECT * FROM hoadonban Order by MaHoaDon ASC";
                                $query = mysqli_query($conn, $sql);
                                $rows = mysqli_num_rows($query);
                                $result = $conn->query($sql);
                                if ($result->num_rows > 0) {
                                    while($row = $result->fetch_assoc()) {
                                      echo 
                                        '<tr>
                                        <th scope="'.'row'.'">'.$row["MaHoaDon"].'</th>
                                        <td>'.$row["NgayLap"].'</td>
                                        <td>'.$row["UserName"].'</td>
                                        <td>'.$row["MaBan"].'</td>
                                        <td>'.$row["GiamGia"].'</td>
                                        <td>'.$row["PhuongThucTT"].'</td>
                                        <td>'.$row["GhiChu"].'</td>
                                        <td><a href='.'"google.com"'.'><button>Sửa</button></a></td>
                                        </tr>';
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