<?php
session_start();
include('../config/config.php');

if (isset($_POST['dangky_post_info'])) {

    $vitri_post_info = $_POST['vitri_post_info'];
    $tencongty_post_info = $_POST['tencongty_post_info'];
    $diachi_post_info = $_POST['diachi_post_info'];
    $mucluong = $_POST['mucluong'];
    $images = $_POST['images'];
    $link = $_POST['link'];
    $sql = "INSERT INTO tbl_thongtintuyendung(vitri_tuyendung,tencongty,vitri_congty,mucluong_tuyendung, images, link) VALUE(?,?,?,?,?,?)";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute([$vitri_post_info, $tencongty_post_info, $diachi_post_info, $mucluong, $images, $link]);
    header("Location:http://localhost/web_mysqli/pages/index.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng thông tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css
" rel="stylesheet">
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
                                <input type="text" class="form-control" id="" name="images">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link web công ty(Nếu có)</label>
                                <input type="text" class="form-control" id="" name="link">
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
    include "../../code/footer.php";
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>