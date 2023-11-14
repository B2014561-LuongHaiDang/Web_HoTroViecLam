<?php
session_start();
include('config/config.php');
$sql = "select * from tbl_dangky_nguoitimviec";
$ketqua = $conn->prepare($sql);
$ketqua->execute();
$ketqua = $ketqua->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="">
        <button href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal1">
        </button>

        <div id="modal1" class="modal fade" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">

                    <div class="modal-header text-center d-block">
                        <button type="button" class="close" style="margin-left: 430px; width: 30px;" data-bs-dismiss="modal">&times;</button>
                        <h2 class="modal-title">
                            <i class="fa-solid fa-user"></i> Thông tin người dùng
                        </h2>
                    </div>


                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label for="usernameInput" class="fw-bold">

                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="25" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 22">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" />
                                    </svg>Người dùng
                                </label>
                                <input class="form-control" placeholder="Nhập tên người dùng" id="usernameInput"></input>
                            </div>


                            <div class="form-group">
                                <label for="passwordInput" class="fw-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 18">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
                                        <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
                                    </svg>Mật khẩu:
                                </label>
                                <p><?= htmlspecialchars($cty['email']) ?></p>
                            </div>


                            <div class="form-group form-check">
                                <input type="checkbox" class="form-check-input">
                                <label class="form-check-label">Ghi nhớ tôi</label>
                            </div>


                            <div class="container mt-2">
                                <div class="row md-3 justify-content-center fw-bold">

                                </div>
                            </div>


                        </form>
                    </div>



                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>