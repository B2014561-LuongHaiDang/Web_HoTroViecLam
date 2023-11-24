<?php
session_start();
include('../pages/config/config.php');
if(isset($_SESSION['loginAD'])){
$id = $_GET['id'];
$sql = "SELECT * FROM tbl_thongtintuyendung WHERE id_thongtintuyendung = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);
$ketqua = $stmt->fetch(PDO::FETCH_ASSOC);
if (isset($_POST['capnhat'])) {
    $vitri_tuyendung = $_POST['vitri_tuyendung'];
    $tencongty = $_POST['tencongty'];
    $vitri_congty = $_POST['vitri_congty'];
    $mucluong_tuyendung = $_POST['mucluong_tuyendung'];
    $images = $_POST['images'];
    $link = $_POST['link'];
    $sql = "CALL suavieclam( '$id','$vitri_tuyendung', '$tencongty', '$vitri_congty', '$mucluong_tuyendung', '$images', '$link')";
    $ketqua = $conn->prepare($sql);
    $ketqua->execute();
    header("Location: delete.php");
}
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng thông tin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href="
https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css
" rel="stylesheet">
</head>

<body>
    <div class="container">

        <form id="signupForm" method="POST" class="form-horizontal" action="">

            <!-- Vị trí cần tuyển -->
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Ngành nghề</label>
                <input type="text" class="form-control" id="" name="vitri_tuyendung" value="<?= htmlspecialchars($ketqua['vitri_tuyendung']) ?>">
            </div>

            <!-- Tên công ty -->
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Tên công ty</label>
                <input type="text" class="form-control" id="" name="tencongty" value="<?= htmlspecialchars($ketqua['tencongty']) ?>">
            </div>

            <!-- Địa chỉ -->
            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Địa chỉ</label>
                <input type="text" class="form-control" id="" name="vitri_congty" value="<?= htmlspecialchars($ketqua['vitri_congty']) ?>">
            </div>


            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Mức lương</label>
                <input type="text" class="form-control" id="" name="mucluong_tuyendung" value="<?= htmlspecialchars($ketqua['mucluong_tuyendung']) ?>">
            </div>


            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Logo công ty</label>
                <input type="file"  id="" name="images" value="<?= htmlspecialchars($ketqua['images']) ?>">
                <input type="text" class="form-control" id="" name="images" value="<?= htmlspecialchars($ketqua['images']) ?>">
            </div>

            <div class=" mb-3">
                <label for="exampleInputEmail1" class="form-label">Link web công ty (Nếu có)</label>
                <input type="text" class="form-control" id="" name="link" value="<?= htmlspecialchars($ketqua['link']) ?>">
            </div>

            <div class="">
                <div class=" d-grid">
                    <button type="submit" class="btn btn-primary" name="capnhat">Cập
                        nhật</button>
                </div>
            </div>
        </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>