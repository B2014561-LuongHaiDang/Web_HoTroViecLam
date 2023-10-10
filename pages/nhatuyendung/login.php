<?php
//     session_start();
//     include('config.php');
//     if(isset($_POST['signup'])){
//         $email = $_POST['email'];
//         $matkhau = md5($_POST['matkhau']);
//         $sql = "SELECT * FROM tbl_dangky_nhatuyendung WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1";
//         $stmt = mysqli_prepare($mysqli, $sql);
//   mysqli_stmt_execute($stmt);

//   $result = mysqli_stmt_get_result($stmt);
//   $count = mysqli_num_rows($result);


//         if($count>0){     
//             header("Location:http://localhost/web_mysqli/pages/nhatuyendung/post_info.php");
//         }else{
//             echo '<script language="javascript">';
//             echo 'alert("Tài khoản hoặc mật khẩu không đúng")';
//             echo '</script>';
//         }
//     }

session_start();
include('config.php');
if (isset($_POST['signup'])) {
    
    $email = $_POST['email'];
    $matkhau = md5($_POST['matkhau']);
    $sql = "SELECT * FROM tbl_dangky_nhatuyendung WHERE email='" . $email . "'AND matkhau='" . $matkhau . "' LIMIT 1";
    $ketqua = $conn->query($sql);
    $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
    
    if ($ketqua) { 
        $_SESSION['tencongty']=$ketqua[0]['tencongty'];
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
                        <div
                            class="alert alert-info text-center "
                            role="alert"
                        >
                            <h4>Vui lòng đăng nhập tại đây!</h4>
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header text-center bg-secondary-subtle text-emphasis-secondary">
                            <a href="http://localhost/web_mysqli/pages/index.php"><button type="button" class="btn-close position-absolute top-0 end-0 p-2"  aria-label="Close"></button></a>
                            <h3>Đăng nhập</h3>
                        </div>
                        <div class="card-body " >
                            <form
                                id="signupForm"
                                method="post"
                                class="form-horizontal"
                                action="#"
                            >

                            

                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="email"
                                        >Hộp thư điện tử</label
                                    >
                                    <div class="col-sm-5">
                                        <input
                                            type="text"
                                            class="form-control"
                                            id="email"
                                            name="email"
                                            placeholder="Email mà bạn đã đăng kí"
                                        />
                                    </div>
                                </div>
                                
                                <div class="form-group row py-2">
                                    <label
                                        class="col-sm-4 col-form-label"
                                        for="password"
                                        >Mật khẩu</label
                                    >
                                    <div class="col-sm-5">
                                        <input
                                            type="password"
                                            class="form-control"
                                            id="password"
                                            name="matkhau"
                                            placeholder="Nhập mật khẩu"
                                        />
                                    </div>
                                </div>


                                <div class="row p-2">
                                    <div class="col-sm-5 offset-sm-4">
                                        <button
                                            type="submit"
                                            class="btn bg-secondary-subtle text-emphasis-secondary"
                                            name="signup"
                                            value="Sign up"
                                        >
                                            Đăng nhập
                                        </button>
                                    </div>
                                </div>

                                <div class="text-center"><a href="">Quên mật khẩu?</a></div>
                                <div class="text-center"><a href="register.php">Đăng kí</a></div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </script>
      </nav>
      <script src="https://code.jquery.com/jquery-3.7.1.js"
    integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <script
        type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.min.js"
    ></script>
    <script type="text/javascript">
        
        $(document).ready(function () {
            $('#signupForm').validate({
                rules: {

                    tencongty:{
                        required:true,
                    },
                    matkhau: {required: true, minlength: 5},
                    email: {required: true, email: true}
                },
                messages: {
                    tencongty:{
                        required:'Nhập tên công ty của bạn'
                    },
                    matkhau: {
                        required: 'Bạn chưa nhập mật khẩu',
                        minlength: 'Mật khẩu phải có ít nhất 5 ký tự',
                    },
                    email: 'Email không đúng',
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    </body>
</html>