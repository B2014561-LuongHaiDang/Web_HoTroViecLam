<?php
session_start();
include('config/config.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_dangky_nguoitimviec WHERE email=? and matkhau=? LIMIT 1";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute([$email, $matkhau]);
    $ketqua = $ketqua->fetch(PDO::FETCH_ASSOC);
    if ($ketqua) {
        $_SESSION['tenkhachhang'] = $ketqua['tenkhachhang'];
        header("Location: index.php");
        exit;
    } else {
        echo '
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        swal({
        type: "error",
        title: "Email hoặc mật khẩu không đúng",
        icon: "error",
        showConfirmButton: true,
        })
        });
        </script>';
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <?php
    include "../code/head.php";
    ?>
    <div class="container">
        <div class="row">
            <div class="col-md-7 d-none d-md-block mt-5">
                <div style="display: grid; place-items: center;">
                    <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 " src="images/login_NTVpng.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="">
                    <div class="card mt-md-5 mb-md-5">
                        <div class="card-header text-center" style="background-color:deepskyblue">
                            <a href="http://localhost/web_mysqli/pages/index.php"><button type="button" class="btn-close position-absolute top-0 end-0 p-3" aria-label="Close"></button></a>
                            <h3>Đăng nhập</h3>
                        </div>
                        <div class="card-body">
                            <form id="signupForm" method="post" class="form-horizontal " action="#">

                                <div class="mb-3">
                                    <label for="exampleInputEmail1" class="form-label ">Email</label>
                                    <input type="email" class="form-control" id="" name="email">
                                </div>

                                <div class="mb-3">
                                    <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" name="matkhau">
                                </div>

                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                    <label class="form-check-label" for="exampleCheck1">Đồng ý các <a href="thoathuannguoidung.php">quy định</a> của chúng tôi</label>
                                </div>

                                <div class="d-grid">
                                    <button type="submit" class="btn btn-outline-info" name="login">Đăng nhập</button>
                                </div>

                                <div class="mt-3 text-center">Nếu chưa có tài khoản vui lòng <a href="register.php">Đăng kí</a></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    include "../code/footer.php";
    ?>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#signupForm').validate({
                rules: {
                    matkhau: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    },
                },
                messages: {
                    matkhau: {
                        required: 'Bạn chưa nhập mật khẩu',
                        minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
                    },
                    email: 'Hộp thư điện tử không hợp lệ',
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