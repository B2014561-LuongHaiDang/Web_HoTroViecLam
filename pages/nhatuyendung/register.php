<?php
session_start();
include('../config/config.php');

if (isset($_POST['dangky'])) {

    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $tencongty = $_POST['tencongty'];
    $sonhanvien = $_POST['sonhanvien'];
    $hotline = $_POST['hotline'];
    $diachi = $_POST['diachi'];
    $sql1 = "SELECT * FROM tbl_dangky_nhatuyendung WHERE email = ?";
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
        $sql = "INSERT INTO tbl_dangky_nhatuyendung(email,matkhau,tencongty,sonhanvien,sodienthoai,diachi) VALUE(?,?,?,?,?,?)";
        $ketqua = $conn->prepare($sql);
        $ketqua->execute([$email, $matkhau, $tencongty, $sonhanvien, $hotline, $diachi]);
        $_SESSION['tencongty'] = $tencongty;
        header("Location:http://localhost/web_mysqli/pages/index.php");
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
<div class="border">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand fw-bold ms-2" style="color:blue">Hỗ trợ việc làm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../index.php"><i class="fa-solid fa-house text-secondary me-1"></i>Trang chủ</a>
        </li>
      </ul>
      <div class="d-flex align-items-center me-3">
        <a class="nav-link active" aria-current="page" href="../nganhnghe.php">
          <i class="fa-solid fa-magnifying-glass text-secondary me-1"></i>
          Ngành nghề/Khu vực
        </a>
      </div>
      <div class="d-flex align-items-center me-3">
        <a class="nav-link active" aria-current="page" href="../camnangvieclam.php">
          <i class="fa-solid fa-book text-secondary me-1"></i>
          Cẩm nang tìm việc
        </a>
      </div>
      <div class="d-flex align-items-center me-3">
        <a class="nav-link active" aria-current="page" href="../cv.php">
          <i class="fa-solid fa-receipt text-secondary me-1"></i>
          Mẫu CV xin việc
        </a>
      </div>
      
      <div class="d-flex align-items-center me-3">
        <?php
        if ((isset($_SESSION['tenkhachhang'])) || (isset($_SESSION['tencongty']))) {
          if ((isset($_SESSION['tenkhachhang']))) {
            echo "<span><a class='text-decoration-none ms-1 text-capitalize fw-bold' style='color:red'>" . $_SESSION['tenkhachhang'] . "</a></span>";
          } else {
            echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tencongty'] . " </span>";
            echo '<span><a class="text-decoration-none text-dark ms-3" href="nhatuyendung/post_info.php"><i class="fa-regular fa-paste text-secondary"></i>Đăng tin tuyển dụng</a></span>';
          }
          echo '<span><a class="text-decoration-none text-dark ms-3" href="logout.php"><i class="fa-solid fa-right-from-bracket text-success"></i>Đăng xuất</a></span>';
        } else {
          echo '<div><a class="text-decoration-none text-dark " href="login.php"><i class="fa-solid fa-user text-secondary"></i> Người tìm việc</a></div>';
          echo '<div><a class="text-decoration-none text-dark ms-3 " href="#"><i class="fa-solid fa-building text-secondary me-1"></i>Nhà tuyển dụng</a></div>';
        }
        ?>
        <div><a class="text-decoration-none text-dark ms-3 " href="../admincp/login.php"><i class="fa-solid fa-user-gear text-secondary me-1"></i>Admin</a></div>
      </div>
    </div>
  </nav>
</div>

    <div class="">
        <div class="row">
            <div class="col-md-7 d-none d-md-block">
                <div class="text-center h2" style="padding-top: 100px;">Nơi uy tín cho bạn bắt đầu tuyển dụng</div>
                <div style="display: grid; place-items: center;">
                <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 "src="../images/login_NTD1.png" alt="">
                </div>
            </div>
            <div class="col-md-5">


                <div class="card mt-3 me-4 ms-4">


                    <div class="card-body" style="background-color:aliceblue">
                        <form id="signupForm" method="POST" class="form-horizontal mx-4" action="">
                            <div class="text-center h3">Nhà tuyển dụng đăng ký</div>
                            <!-- Email -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="" name="email">
                            </div>


                            <!-- Mật khẩu -->

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Mật khẩu</label>
                                <input type="password" class="form-control" id=matkhau name="matkhau">
                            </div>

                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Nhập lại mật khẩu</label>
                                <input type="password" class="form-control" name="NLmatkhau">
                            </div>


                            <div class="text-center h4" style="">Thông tin công ty</div>


                            <!-- Tên công ty -->
                            <div class="mb-3">
                                <label for="" class="form-label">Tên công ty</label>
                                <input type="text" class="form-control" id="" name="tencongty">
                            </div>


                            <!-- Số nhân viên -->
                            <div class="mb-3">
                                <label for="" class="form-label">Số nhân viên</label>
                                <input type="text" class="form-control" id="" name="sonhanvien">
                            </div>

                            <!-- Hotline -->
                            <div class="mb-3">
                                <label for="" class="form-label">Số điện thoại</label>
                                <input type="text" class="form-control" id="" name="hotline">
                            </div>

                            <!-- Địa chỉ -->
                            <div class="mb-3">
                                <label for="" class="form-label">Địa chỉ</label>
                                <input type="text" class="form-control" id="" name="diachi">
                            </div>

                            <div class="form-group form-check mb-3">
                                <input class="form-check-input" type="checkbox" id="agree" name="agree" value="agree" />
                                <label class="form-check-label" for="agree">Đồng ý các <a href="../thoathuannguoidung.php">quy định</a> của chúng tôi</label>
                            </div>

                            <div class="d-grid">
                                <button type="submit" class="btn btn-info" name="dangky">Đăng ký</button>
                            </div>
                            <div class="mt-3 text-center">Quay lại <a href="login.php">Đăng nhập</a></div>

                    </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Cột nội dung -->
    </div>
    <!-- Dòng nội dung -->
    </script>
    </nav>

    <hr />
    <?php
    include "../../code/footer.php";
    ?>

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
                        required: true,
                        minlength: 10,
                        maxlength: 10,
                    },
                    sonhanvien: {
                        required: true,
                    },
                    tencongty: {
                        required: true,
                    },
                    diachi: {
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
                    hotline: {
                        required: 'Bạn chưa nhập số điện thoại liên hệ',
                    },
                    sonhanvien: {
                        required: 'Bạn chưa nhập số nhân viên',
                    },
                    tencongty: {
                        required: 'Bạn chưa nhập tên công ty',
                    },
                    diachi: {
                        required: 'Bạn chưa nhập địa chỉ',
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