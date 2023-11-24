<?php
session_start();
include('../pages/config/config.php');
if (isset($_SESSION['username'])) {
    $sql = "SELECT * from tbl_thongtintuyendung where da_duyet=1";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute();
    $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (isset($_POST['delete'])) {
            $id = $_POST['id'];
            $sql = "UPDATE tbl_thongtintuyendung SET da_duyet=2  where id_thongtintuyendung=?";
            $ketqua = $conn->prepare($sql);
            $ketqua->execute([$id]);
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
            header("refresh:2;url=index.php");
            exit;
        }
    };
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Quản lí</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>

    <body>
        <div class="d-flex justify-content-end mt-2">
            <div><a class="text-decoration-none text-dark me-5" href="login.php"><i class="fa-solid fa-right-from-bracket text-secondary"></i>Đăng xuất</a></div>
        </div>
        <div class="h1 text-center mt-3"><span class="text-success">SỬA-<span class="text-warning">XÓA THÔNG TIN</span></div>
        <div class="ms-2 mt-3">
            <a href="phanhoikhachhang.php"><input type="submit" name="delete" class="mt-1" value="Phản hồi của khách hàng"></a>
        </div>
        <div class="d-flex justify-content-end me-3 mt-3">
            <a href="add.php"><input type="submit" name="submit" class="btn btn-danger" value="Duyệt thông tin"></a>
            <a href="da_xoa.php"><input type="submit" name="deleted" class="btn btn-dark ms-1" value="Đã xóa"></a>
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
                                <div class="" style="padding-top:10px"><a class="text-decoration-none text-dark h5 fw-bold " href=""><?= $cty['vitri_tuyendung'] ?></a></div>
                                <div class=""><a class=" text-decoration-none text-dark h6 " href=""><?= $cty['tencongty'] ?></a></div>
                                <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
                                <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
                                <form method="POST" onsubmit="return confirmDelete();">
                                    <input type="submit" name="delete" class="btn btn-outline-warning" value="Xóa"><input type="hidden" name="id" value="<?= $cty['id_thongtintuyendung'] ?>">
                                    <a href="sua.php?id=<?= $cty['id_thongtintuyendung'] ?>" class="btn btn-outline-success">Sửa</a>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
        <script>
            function confirmDelete() {
                return confirm("Bạn có chắc chắn muốn xóa?");
            }
        </script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    </body>

    </html>
<?php } else {
    header('location:login.php');
} ?>