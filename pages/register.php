<?php
session_start();
include('config/config.php');

if (isset($_POST['dangky'])) {

    $tenkhachhang = $_POST['tenkhachhang'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "INSERT INTO tbl_dangky_nguoitimviec(tenkhachhang,email,diachi,dienthoai,matkhau) VALUE(?,?,?,?,?)";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute([$tenkhachhang, $email, $diachi, $dienthoai, $matkhau]);
    if ($ketqua) {
        $_SESSION['tenkhachhang'] = $ketqua['tenkhachhang'];
        header("Location:index.php");
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
                        <h4>Vui lòng đăng kí tại đây!</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center position-relative">

                        <h3>Đăng ký thành viên</h3>
                    </div>
                    <div class="card-body">
                        <form id="signupForm" method="POST" class="form-horizontal" action="">
                            <!-- Họ và tên -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên công ty</label>
                                <input type="text" class="form-control" id="" name="tenkhachhang">
                            </div>

                            <!-- Email -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>

                            <!-- Địa chỉ -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="" name="diachi">
                            </div>

                            <!-- Số điện thoại -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="" name="dienthoai">
                            </div>

                            <!-- Mật khẩu -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" name="matkhau">
                            </div>

                            <!-- Checkbox -->
                            <div class="form-group form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="agree" name="agree" value="agree" />
                                <label class="form-check-label" for="agree">Đồng ý các quy định của chúng tôi</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="dangky">Đăng ký</button>
                            </div>

                            <div class="text-center">Quay lại <a href="login.php">Đăng nhập</a></div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Cột nội dung -->
        </div>
        <!-- Dòng nội dung -->
    </div>

    <hr />

    <div class="text-center" style="background-color:#e0d8d8 ; padding-bottom:50px;padding-top:50px;">
        <div class="row">

            <div class="col-sm-4 col-md-4 h4">Về hỗ trợ việc làm
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Về chúng tôi</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Liên hệ</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Thỏa thuận người dùng</a>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 h4">Dành cho ứng viên
                <div class="h5 ms-2"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Việc làm</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Cẩm nang xin việc</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Mẫu CV xin việc</a>
                </div>
            </div>

            <div class="col-sm-4 col-md-4 h4">Việc làm theo khu vực
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Hồ Chí Minh</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Cần Thơ</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Bạc Liêu</a>
                </div>
            </div>

        </div>

        <div class="row">

            <div class="col-sm-4 col-md-4 h4">Chứng nhận
                <div>
                    <img class="img-fluid" src="images/chungnhan.png" />
                </div>
            </div>
            <div class="col-sm-4 col-md-4 h4">Dành cho nhà tuyển dụng
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Dịch vụ</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Cẩm nang tuyển dụng</a>
                </div>
            </div>
            <div class="col-sm-4 col-md-4 h4">Việc làm theo ngành nghề
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Quản trị kinh doanh</a>
                </div>
                <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Kế toán</a>
                </div>
            </div>
        </div>
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