<?php
session_start();
include('config/config.php');

if(isset($_POST['dangky'])) {
    
    $tenkhachhang = $_POST['tenkhachhang'];
    $email = $_POST['email'];
    $diachi = $_POST['diachi'];
    $dienthoai = $_POST['dienthoai'];
    $matkhau = md5($_POST['matkhau']);
    $sql_dangky = mysqli_query($mysqli,"INSERT INTO tbl_dangky_nguoitimviec(tenkhachhang,email,diachi,dienthoai,matkhau) 
    VALUE('".$tenkhachhang."','".$email."','".$diachi."','".$dienthoai."','".$matkhau."')");
    if($sql_dangky){
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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
	</head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2">
                    <div class="mt-2">
                        <div
                            class="alert alert-info text-center"
                            role="alert"
                        >
                            <h4>Vui lòng đăng kí tại đây!</h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center position-relative">
                            <a href="index.php"><button type="button" class="btn-close position-absolute top-0 end-0 p-2"  
                            aria-label="Close"></button></a>
                            <h3>Đăng ký thành viên</h3>
                        </div>
                        <div class="card-body">
                            <form
                                id="signupForm"
                                method="POST"
                                class="form-horizontal"
                                action=""
                            >
                                <!-- Họ và tên -->
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="tenkhachhang"
                                        >Họ và tên</label
                                    >
                                    <div class="col-sm-5" style="padding-left: 0;">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="tenkhachhang"
                                            name="tenkhachhang"
                                            placeholder="Họ và tên"
                                        />
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="email"
                                        >Hộp thư điện tử</label
                                    >
                                    <div class="col-sm-5" style="padding-left: 0;">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            placeholder="Hộp thư điện tử"
                                        />
                                    </div>
                                </div>

                                <!-- Địa chỉ -->
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="diachi"
                                        >Địa chỉ</label
                                    >
                                    <div class="col-sm-5" style="padding-left: 0;">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="diachi"
                                            name="diachi"
                                            placeholder="Địa chỉ của bạn"
                                        />
                                    </div>
                                </div>
                                
                                <!-- Số điện thoại -->
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="dienthoai"
                                        >Số điện thoại</label
                                    >
                                    <div class="col-sm-5" style="padding-left: 0;">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="dienthoai"
                                            name="dienthoai"
                                            placeholder="Số điện thoại của bạn"
                                        />
                                    </div>
                                </div>

                                <!-- Mật khẩu -->
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="matkhau"
                                        >Mật khẩu</label
                                    >
                                    <div class="col-sm-5" style="padding-left: 0;">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="matkhau"
                                            name="matkhau"
                                            placeholder="Tạo mật khẩu cho tài khoản"
                                        />
                                    </div>
                                </div>

                                <!-- Nhập lại mật khẩu -->
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="confirm_password"
                                        >Nhập lại mật khẩu</label
                                    >
                                    <div class="col-sm-5" style="padding-left: 0;">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="confirm_password"
                                            name="confirm_password"
                                            placeholder="Nhập lại mật khẩu"
                                        />
                                    </div>
                                </div>

                                <!-- Checkbox -->
                                <div class="form-group form-check">
                                    <div class="col-sm-4 offset-sm-4">
                                        <input
                                            class="form-check-input"
                                            type="checkbox"
                                            id="agree"
                                            name="agree"
                                            value="agree"
                                        />
                                        <label
                                            class="form-check-label"
                                            for="agree"
                                            >Đồng ý các quy định của chúng tôi</label
                                        >
                                    </div>
                                </div>

                                <div class="row py-2">
                                    <div class="col-sm-5 offset-sm-4">
                                        <button
                                            type="submit"
                                            class="btn btn-primary"
                                            name="dangky"
                                            value="Sign up"
                                        >
                                            Đăng ký
                                        </button>
                                    </div>
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
      <script src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"
    ></script>
    <script type="text/javascript">
        // $.validator.setDefaults({
        //     submitHandler: function () {
        //         alert('Đăng kí thành công!');
        //     },
        // });
        $(document).ready(function () {
            $('#signupForm').validate({
                rules: {
                    tenkhachhang: {required: true, minlength: 0},
                    diachi: {required: true, minlength: 5},
                    dienthoai: {required: true, minlength: 5},
                    username: {required: true, minlength: 2},
                    matkhau: {required: true, minlength: 5},
                    confirm_password: {
                        required: true,
                        minlength: 5,
                        equalTo: '#matkhau',
                    },
                    email: {required: true, email: true},
                    agree: 'required',
                },
                messages: {
                    
					tenkhachhang:{
                        required: 'Bạn chưa nhập vào tên của bạn',
                    },	
                    diachi:{
                        required: 'Bạn chưa nhập địa chỉ',
                    },
                  
                    dienthoai:{
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
                errorPlacement: function (error, element){
                    error.addClass('invalid-feedback');
                    if (element.prop('type') === 'checkbox'){
                        error.insertAfter(element.siblings('label'));
                    } else {
                        error.insertAfter(element);
                    }
                },
                highlight: function (element, errorClass, validClass){
                    $(element)
                    .addClass('is-invalid')
                    .removeClass('is-valid');
                },
                unhighlight: function (element, errorClass, validClass){
                    $(element)
                    .addClass('is-valid')
                    .removeClass('is-invalid');
                },
            });
        });
    </script>
    </body>
</html>