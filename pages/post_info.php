<?php
session_start();
include('config/config.php');
$created_at=time();
if(isset($_SESSION['tencongty'])) {
if (isset($_POST['dangky_post_info'])) {
    $vitri_post_info = $_POST['vitri_post_info'];
    $tencongty_post_info = $_POST['tencongty_post_info'];
    $diachi_post_info = $_POST['diachi_post_info'];
    $mucluong = $_POST['mucluong'];
    $images = $_POST['images'];
    $link = $_POST['link'];
    $goi = $_POST['goi'];
    $expired_at = strtotime("+$goi days", $created_at);
    $expired_at_format = date('Y-m-d', $expired_at);
    $sql = "INSERT INTO tbl_thongtintuyendung(vitri_tuyendung,tencongty,vitri_congty,mucluong_tuyendung, images, link,expired_at) VALUE(?,?,?,?,?,?,?)";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute([$vitri_post_info, $tencongty_post_info, $diachi_post_info, $mucluong, $images, $link, $expired_at_format]);
    if ($ketqua) {
        echo '
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        swal({
        type: "error",
        title: "Đã gửi thông tin đến admin , vui lòng chờ admin duyệt",
        icon: "info",
        showConfirmButton: true,
        })
        });
        </script>';
        header("refresh:2;url=index.php");
        exit;
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng thông tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css" rel="stylesheet">
</head>

<body>
    <div class="">
        <div class="row">
            <div class="col-12 col-md-6 offset-md-3">

                <div class="card mt-3">
                    <div class="card-header text-center" style="background-color:deepskyblue">
                        <h3>Nhập thông tin tuyển dụng</h3>
                    </div>

                    <div class="card-body" style="background-color:aliceblue">
                        <form id="signupForm" method="POST" class="form-horizontal" action="">

                            <!-- Vị trí cần tuyển -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Vị trí tuyển dụng</label>
                                <input type="text" class="form-control" id="" name="vitri_post_info">
                            </div>

                            <!-- Tên công ty -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên công ty</label>
                                <input type="text" class="form-control" id="" name="tencongty_post_info">
                            </div>

                            <!-- Địa chỉ -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="" name="diachi_post_info">
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Mức lương</label>
                                <input type="text" class="form-control" id="" name="mucluong">
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Logo công ty</label>
                                <input type="file" class="form-control" id="" name="images">
                            </div>


                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link web công ty(Nếu có)</label>
                                <input type="text" class="form-control" id="" name="link">
                            </div>

                            <div class="mb-3">
                                <label for="">Chọn gói thuê:</label>
                                <select id="goi" name="goi" required>
                                    <option value="7">7 ngày-100k</option>
                                    <option value="15">15 ngày-180k</option>
                                    <option value="30">30 ngày-300k</option>
                                </select>
                            </div>

                            <div class="">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-outline-info" name="dangky_post_info">Đăng thông tin</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr />
    <?php
    include "../code/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>
<?php } else {
    header('location:login.php');
} ?>