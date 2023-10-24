<?php


session_start();
include('config.php');
if (isset($_POST['login'])) {

    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_dangky_nhatuyendung WHERE email='" . $email . "'AND matkhau='" . $matkhau . "' LIMIT 1";
    $ketqua = $conn->query($sql);
    $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);

    if ($ketqua) {
        $_SESSION['tencongty'] = $ketqua[0]['tencongty'];
        header("Location:http://localhost/web_mysqli/pages/index.php");
    } else {
        echo '<script language="javascript">';
        echo 'alert("Tài khoản hoặc mật khẩu không đúng")';
        echo '</script>';
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Đăng nhập</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="mt-2">
                    <div class="alert alert-info text-center " role="alert">
                        <h4>Vui lòng đăng nhập tại đây!</h4>
                    </div>
                </div>

                <div class="card">
                    <div class="card-header text-center bg-secondary-subtle text-emphasis-secondary">
                        <a href="http://localhost/web_mysqli/pages/index.php"><button type="button" class="btn-close position-absolute top-0 end-0 p-3" aria-label="Close"></button></a>
                        <h3>Đăng nhập</h3>
                    </div>
                    <div class="card-body ">
                        <form id="signupForm" method="post" class="form-horizontal" action="#">



                        <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="tenkhachhang" name="email">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" name="matkhau">
                            </div>

                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Đồng ý các quy định của chúng tôi</label>
                            </div>


                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary" name="login">Đăng nhập</button>
                            </div>

                            <div class="text-center"><a href="">Quên mật khẩu</a></div>
                            <div class="text-center">Nếu chưa có tài khoản vui lòng <a href="register.php">Đăng kí</a></div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </script>
    </nav>
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
          <img class="img-fluid" src="../images/chungnhan.png" />
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
  </div>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>