<?php include '../admin/header.php' ?>
<?php 
    include_once '../../models/ketnoi.php';
?>
<?php 
$sql_congthucmon = "SELECT * FROM congthucmon";
$query_congthucmon = mysqli_query($conn, $sql_congthucmon);

if(isset($_POST["submit"])){
    $MaSP= $_POST["MaSP"];
    $MaLoai= $_POST["MaLoai"];
    $TenSP= $_POST["TenSP"];
    $GiaBan= $_POST["GiaBan"];
    $GioiThieuSP= $_POST["GioiThieuSP"];
    $sql = "INSERT INTO danhmucsp (MaSP, MaLoai, TenSP, GiaBan, GioiThieuSP) 
        VALUES ('$MaSP', '$MaLoai', '$TenSP', '$GiaBan', '$GioiThieuSP')";
    $query= mysqli_query($conn, $sql);
    header('location: danhmucmonan.php');
    }

?>
<div class="content-wrapper">

<div class="row mt-3">

    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <form method="POST" action="" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="MaSP">Mã Sản Phẩm</label>
                        <input type="text" name="MaSP" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="MaLoai">Mã Loại</label>
                        <input type="text" name="MaLoai" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="TenSP">Tên Món</label>
                        <input type="text" name="TenSP" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="GiaBan">Giá Bán</label>
                        <input type="text" name="GiaBan" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="GioiThieuSP">Giới Thiệu Sản Phẩm</label>
                        <input type="text" name="GioiThieuSP" class="form-control">
                    </div>
                    <div class="form-group">
                        <input type="submit" name="submit" value="Thêm" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>