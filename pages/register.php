<?php
session_start();
include('config/config.php');
if (isset($_POST['dangky'])) {
    $tenkhachhang = $_POST['tenkhachhang'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $sql1 = "SELECT * FROM tbl_dangky_nguoitimviec WHERE email = ?";
    $ketqua1 = $conn->prepare($sql1);
    $ketqua1->execute([$email]);
    if ($ketqua1->rowCount() > 0) {
        echo '
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        swal({
        type: "error",
        title: "Email đã tồn tại!!!",
        icon: "error",
        showConfirmButton: true,
        })
        });
        </script>';
    } else {
        $sql = "INSERT INTO tbl_dangky_nguoitimviec(tenkhachhang,email,diachi,dienthoai,matkhau)VALUES(?,?,?,?,?) ";
        $ketqua = $conn->prepare($sql);
        $ketqua->execute([$tenkhachhang, $email, $diachi, $dienthoai, $matkhau]);
        $_SESSION['tenkhachhang'] = $tenkhachhang;
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "../code/head.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-none d-md-block" style="padding-top:140px">
                <div style="display: grid; place-items: center;">
                    <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 " src="images/login_NTVpng.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mt-3">
                    <div class="card-header text-center" style="background-color:deepskyblue">
                        <h3>Đăng ký thành viên</h3>
                    </div>
                    <div class="card-body">
                        <form id="signupForm" method="POST" class="form-horizontal" action="">

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Tên của bạn</label>
                                <input type="text" class="form-control" id="" name="tenkhachhang">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="" name="diachi">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="" name="dienthoai">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id=matkhau name="matkhau">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="NLmatkhau">
                            </div>

                            <div class="form-group form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="agree" name="agree" value="agree" />
                                <label class="form-check-label" for="agree">Đồng ý các <a href="thoathuannguoidung.php">quy định</a> của chúng tôi</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-outline-info" name="dangky">Đăng ký</button>
                            </div>

                            <div class="mt-3 text-center">Quay lại <a href="login.php">Đăng nhập</a></div>

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
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
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
                    matkhau: {
                        required: true,
                        minlength: 5
                    },
                    NLmatkhau: {
                        required: true,
                        equalTo: '#matkhau'
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
                    NLmatkhau: {
                        required: 'Bạn chưa xác nhận mật khẩu',
                        equalTo: 'Mật khẩu không đúng',
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