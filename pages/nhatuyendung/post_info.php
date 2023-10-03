<?php
session_start();
include('config.php');

if (isset($_POST['dangky_post_info'])) {

    $vitri_post_info = $_POST['vitri_post_info'];
    $tencongty_post_info = $_POST['tencongty_post_info'];
    $diachi_post_info = $_POST['diachi_post_info'];
    $mucluong = $_POST['mucluong'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_thongtintuyendung(vitri_tuyendung,tencongty,vitri_congty,mucluong_tuyendung)
    VALUE('" . $vitri_post_info . "','" . $tencongty_post_info . "','" . $diachi_post_info . "','" . $mucluong . "')");
    // if ($sql_dangky) {
    //     echo '<script language="javascript">';
    //     echo 'alert("Đăng thông tin thành công")';
    //     echo '</script>';

    // }
    if($sql_dangky){
        $_SESSION['dangnhap10'] = $vitri_post_info;
        $_SESSION['dangnhap11'] = $tencongty_post_info;
        $_SESSION['dangnhap12'] = $diachi_post_info;
        header("Location:http://localhost/web_mysqli/pages/index1.php");
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
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<body>

    <div class="row">
        <div class="col-sm-6 col-md-4"></div>
        <div class="col-sm-6 col-md-4">

            <div class="card">
                <div class="card-header text-center position-relative">
                    <h3>Nhập thông tin công ty của bạn</h3>
                </div>

                <div class="card-body" style="background-color:aqua">
                    <form id="signupForm" method="POST" class="form-horizontal" action="">

                        <!-- Vị trí cần tuyển -->
                        <div class="form-group row py-2">
                            <label class="col-sm-4 col-form-label" for="">Vị trí cần tuyển</label>
                            <div class="col-sm-5" style="padding-left: 0;">
                                <input type="text" class="form-control" id="" name="vitri_post_info" placeholder="Nhập vào đây" />
                            </div>
                        </div>


                        <!-- Tên công ty -->
                        <div class="form-group row py-2">
                            <label class="col-sm-4 col-form-label" for="">Tên công ty</label>
                            <div class="col-sm-5" style="padding-left: 0;">
                                <input type="text" class="form-control" id="" name="tencongty_post_info" placeholder="Nhập vào đây" />
                            </div>
                        </div>

                        <!-- Địa chỉ -->
                        <div class="form-group row py-2">
                            <label class="col-sm-4 col-form-label" for="diachi">Địa chỉ công ty</label>
                            <div class="col-sm-5" style="padding-left: 0;">
                                <input type="text" class="form-control" id="diachi" name="diachi_post_info" placeholder="Nhập vào đây" />
                            </div>
                        </div>

                        <div class="form-group row py-2">
                            <label class="col-sm-4 col-form-label" for="">Mức lương</label>
                            <div class="col-sm-5" style="padding-left: 0;">
                                <input type="text" class="form-control" id="" name="mucluong" placeholder="Nhập vào đây" />
                            </div>
                        </div>

                        <!-- <div class="form-group row py-2">
                            <label class="col-form-label" for="">Logo công ty
                                <div id="content">
                                    <form method="POST" action="upload.php" enctype="multipart/form-data">
                                        <input type="hidden" name="size" value="1000000">
                                        <input type="file" name="image">
                                        <button type="submit" name="upload">POST</button>
                                        
                                    </form>
                                </div>
                            </label>

                        </div> -->


                        <div class="">
                            <form id="signupForm" method="POST" class="form-horizontal" action="">
                                <div class="row py-2">
                                    <div class="col-sm-5 offset-sm-4">
                                        <button type="submit" class="btn btn-primary" name="dangky_post_info" value="Sign up">
                                            Đăng thông tin
                                        </button>
                                    </div>
                                </div>




                            </form>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-sm-6 col-md-4"></div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>