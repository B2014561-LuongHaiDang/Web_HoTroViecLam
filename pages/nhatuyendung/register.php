<?php
session_start();
include('config.php');

if (isset($_POST['dangky'])) {

    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $tencongty = $_POST['tencongty'];
    $sonhanvien = $_POST['sonhanvien'];
    $hotline = $_POST['hotline'];
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky_nhatuyendung(email,matkhau,tencongty,sonhanvien,sodienthoai,diachi) 
    VALUE('" . $email . "','" . $matkhau . "','" . $tencongty . "','" . $sonhanvien . "','" . $hotline . "','" . $diachi . "')");
    if ($sql_dangky) {
        echo '<script language="javascript">';
        echo 'alert("Đăng ký thành công!")';
        echo '</script>';

    }
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Đăng kí</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="mt-2">
                    <div class="alert alert-info text-center" role="alert">
                        <h4>Nhà tuyển dụng đăng kí tại đây</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center position-relative">
                        <a href="http://localhost/web_mysqli/pages/index.php"><button type="button" class="btn-close position-absolute top-0 end-0 p-2" aria-label="Close"></button></a>
                        <h3>Đăng ký để bắt đầu đăng việc ngay</h3>
                    </div>

                    <div class="card-body">
                        <form id="signupForm" method="POST" class="form-horizontal" action="">

                            <!-- Email -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="email">Email</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="Email công việc" />
                                </div>
                            </div>


                            <!-- Mật khẩu -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="matkhau">Mật khẩu</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="password" class="form-control" id="matkhau" name="matkhau" placeholder="Tạo mật khẩu cho tài khoản" />
                                </div>
                            </div>

                            <!-- Nhập lại mật khẩu -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="confirm_password">Nhập lại mật khẩu</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="password" class="form-control" id="confirm_password" name="confirm_password" placeholder="Nhập lại mật khẩu" />
                                </div>
                            </div>



                            <div class="text-center h4" style="padding-top:10px">Thông tin công ty</div>

                            <!-- Tên công ty -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="">Tên công ty</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="text" class="form-control" id="" name="tencongty" placeholder="Nhập công ty của bạn" />
                                </div>
                            </div>


                            <!-- Số nhân viên -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="">Số nhân viên</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="text" class="form-control" id="" name="sonhanvien" placeholder="Nhập số nhân viên" />
                                </div>
                            </div>

                            <!-- Hotline -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="">Số điện thoại</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="text" class="form-control" id="" name="hotline" placeholder="Nhập số điện thoại để liên hệ" />
                                </div>
                            </div>

                            <!-- Địa chỉ -->
                            <div class="form-group row py-2">
                                <label class="col-sm-4 col-form-label" for="diachi">Địa chỉ</label>
                                <div class="col-sm-5" style="padding-left: 0;">
                                    <input type="text" class="form-control" id="diachi" name="diachi" placeholder="Địa chỉ công ty của bạn" />
                                </div>
                            </div>

                            <div class="">
                                <form id="signupForm" method="POST" class="form-horizontal" action="">


                                    <div class="row py-2">
                                        <div class="col-sm-5 offset-sm-4">
                                            <button type="submit" class="btn btn-primary" name="dangky" value="Sign up">
                                                Đăng ký
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Cột nội dung -->
        </div>
        <!-- Dòng nội dung -->
    </div>
    <!-- Container -->
    </script>
    </nav>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
        // $.validator.setDefaults({
        //     submitHandler: function () {
        //         alert('Đăng kí thành công!');
        //     },
        // });
        $(document).ready(function() {
            $('#signupForm').validate({
                rules: {
                    hotline: {
                        required:true,
                    },
                    sonhanvien: {
                        required:true,
                    },
                    tencongty: {
                        required:true,
                    },
                    tenkhachhang: {
                        required: true,
                        minlength: 0
                    },
                    diachi: {
                        required: true,
                        minlength: 5
                    },
                    dienthoai: {
                        required: true,
                        minlength: 5
                    },
                    username: {
                        required: true,
                        minlength: 2
                    },
                    matkhau: {
                        required: true,
                        minlength: 5
                    },
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: '#matkhau',
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    agree: 'required',
                },
                messages: {
                    hotline: {
                        required: 'Bạn chưa nhập số điện thoại liên hệ',
                    },
                    sonhanvien: {
                        required: 'Bạn chưa nhập số nhân viên',
                    },
                    tencongty: {
                        required: 'Bạn chưa nhập tên công ty',
                    },
                    tenkhachhang: {
                        required: 'Bạn chưa nhập vào tên của bạn',
                    },
                    diachi: {
                        required: 'Bạn chưa nhập địa chỉ',
                    },

                    dienthoai: {
                        required: 'Bạn chưa nhập số điện thoại',
                    },
                    matkhau: {
                        required: 'Bạn chưa nhập mật khẩu',
                        minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
                    },
                    confirm_password: {
                        required: 'Bạn chưa nhập mật khẩu',
                        minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
                        equalTo: 'Mật khẩu không trùng khớp với mật khẩu đã nhập',
                    },
                    email: 'Hộp thư điện tử không hợp lệ',
                    agree: 'Bạn phải đồng ý với các quy định của chúng tôi',
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    if (element.prop('type') === 'checkbox') {
                        error.insertAfter(element.siblings('label'));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function(element, errorClass, validClass) {
                    $(element)
                        .addClass('is-invalid')
                        .removeClass('is-valid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element)
                        .addClass('is-valid')
                        .removeClass('is-invalid');
                },
            });
        });
    </script>
</body>

</html>