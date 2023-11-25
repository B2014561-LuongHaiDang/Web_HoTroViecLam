<?php
session_start();
include('../pages/config/config.php');
if (isset($_SESSION['username'])) {
    $sql = "select * from tbl_thongtintuyendung where da_duyet=2";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute();
    $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['submit'])) {
            $id = $_POST['id'];
            $sql = "DELETE FROM tbl_thongtintuyendung WHERE id_thongtintuyendung=?";
            $ketqua = $conn->prepare($sql);
            $ketqua->execute([$id]);
            if ($ketqua) {
                echo '
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                swal({
                type: "error",
                title: "Xóa thành công",
                icon: "success",
                showConfirmButton: true,
                })
                });
                </script>';
                header("refresh:2;url=da_xoa.php");
                exit;
            }
        }
    };
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['restore'])) {
            $id = $_POST['id_restore'];
            $sql = "UPDATE tbl_thongtintuyendung SET da_duyet=1  where id_thongtintuyendung=?";
            $ketqua = $conn->prepare($sql);
            $ketqua->execute([$id]);
            if ($ketqua) {
                echo '
                <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
                <script type="text/javascript">
                $(document).ready(function(){
                swal({
                type: "error",
                title: "Khôi phục thành công",
                icon: "success",
                showConfirmButton: true,
                })
                });
                </script>';
                header("refresh:2;url=da_xoa.php");
                exit;
            }
        }
    };
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Thông tin đã xóa</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="d-flex justify-content-end mt-2">
            <div><a class="text-decoration-none text-dark me-5" href="login.php"><i class="fa-solid fa-right-from-bracket text-secondary"></i>Đăng xuất</a></div>
        </div>
        <div class="h1 text-center text-dark mt-3">THÔNG TIN ĐÃ BỊ XÓA</div>
        <div class="ms-2 mt-3">
            <a href="phanhoikhachhang.php"><input type="submit" name="delete" class="mt-1" value="Trở lại giao diện chính"></a>
        </div>
        <div class="d-flex justify-content-end me-3 mt-3">
            <a href="add.php"><input type="submit" name="submit" class="btn btn-danger" value="Duyệt thông tin"></a>
            <a href="index.php"><input type="submit" name="delete" class="btn btn-warning ms-1" value="Sửa-Xóa thông tin"></a>
        </div>
        <div class="container" style="padding-top:25px">
            <div class="row">
                <?php foreach ($ketqua as $cty) : ?>
                    <div class=" col-md-4 border">
                        <div class="row">
                            <div class="col-sm-6 col-md-3" style="display: grid; place-items: center;">
                                <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" src="<?= $cty['images'] ?>" />
                            </div>
                            <div class="col-sm-6 col-md-9 ">
                                <div class="" style="padding-top:10px"><a class="text-decoration-none text-dark h5 fw-bold " href="company_profile_cty1/cty1.php"><?= $cty['vitri_tuyendung'] ?></a></div>
                                <div class=""><a class=" text-decoration-none text-dark h6 " href="company_profile_cty1/cty1.php"><?= $cty['tencongty'] ?></a></div>
                                <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
                                <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
                                <form method="POST" onsubmit="return confirmDelete();">
                                    <input type="submit" name="submit" class="btn btn-outline-dark" value="Xóa vĩnh viễn"><input type="hidden" name="id" value="<?= $cty['id_thongtintuyendung'] ?>">
                                    <input type="submit" name="restore" class="btn btn-outline-dark" value="Khôi phục"><input type="hidden" name="id_restore" value="<?= $cty['id_thongtintuyendung'] ?>">
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <script>
            function confirmDelete() {
                return confirm("Bạn có chắc chắn muốn thực hiện thao tác này?");
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } else {
    header('location:login.php');
} ?>