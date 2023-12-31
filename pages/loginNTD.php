<?php
session_start();
include('config/config.php');
if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_dangky_nhatuyendung WHERE email=? AND matkhau=? LIMIT 1";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute([$email, $matkhau]);
    $ketqua = $ketqua->fetch(PDO::FETCH_ASSOC);
    if ($ketqua) {
        $_SESSION['tencongty'] = $ketqua['tencongty'];
        header("Location:index.php");
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

    <div class="">
        <div class="row">
            <div class="col-md-7 d-none d-md-block">
                <div class="text-center mt-2 h2">Nơi uy tín cho bạn bắt đầu tuyển dụng</div>
                <div style="display: grid; place-items: center;">
                    <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 " src="images/login_NTD1.png" alt="">
                </div>
            </div>
            <div class="col-md-5">
                <div class="card mt-5 me-4 ms-4">
                    <div class="card-body" style="background-color:aliceblue">
                        <form id="signupForm" method="post" class="form-horizontal mx-4" action="#">

                            <div class="text-center h3">Nhà tuyển dụng đăng nhập</div>

                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="matkhau">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Đồng ý các <a href="../thoathuannguoidung.php">quy định</a> của chúng tôi</label>
                            </div>


                            <div class="d-grid">
                                <button type="submit" class="btn btn-info" name="login">Đăng nhập</button>
                            </div>

                            <div class="mt-3 text-center">Nếu chưa có tài khoản vui lòng <a href="registerNTD.php">Đăng ký</a></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
    </nav>
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

                    tencongty: {
                        required: true,
                    },
                    matkhau: {
                        required: true,
                        minlength: 5
                    },
                    email: {
                        required: true,
                        email: true
                    }
                },
                messages: {
                    tencongty: {
                        required: 'Nhập tên công ty của bạn'
                    },
                    matkhau: {
                        required: 'Bạn chưa nhập mật khẩu',
                        minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
                    },
                    email: 'Email không đúng',
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