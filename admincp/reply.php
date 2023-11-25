<?php
session_start();
include('../pages/config/config.php');
if (isset($_SESSION['username'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM tbl_phanhoikhachhang WHERE id_phanhoikhachhang = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $ketqua = $stmt->fetch(PDO::FETCH_ASSOC);

    if (isset($_POST['reply'])) {
        $phan_hoi = $_POST['phanhoi'];
        $sql = "CALL phanhoi( '$id', '$phan_hoi')";
        $ketqua = $conn->prepare($sql);
        $ketqua->execute();
        header("Location: phanhoikhachhang.php");
        if ($ketqua) {
            $id = $_GET['id'];
            $sql = "UPDATE tbl_phanhoikhachhang SET gia_tri=1 where id_phanhoikhachhang=?";
            $ketqua = $conn->prepare($sql);
            $ketqua->execute([$id]);
            $ketqua = $ketqua->fetch(PDO::FETCH_ASSOC);
        }
    }
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Phản hồi</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.28/dist/sweetalert2.min.css" rel="stylesheet">
    </head>

    <body>
        <div class="container">
            <div class="row mt-5">
                <div class="col-12 col-md-6 offset-md-3">
                    <div class="card">
                        <div class="card-body ">
                            <form id="signupForm" method="POST" class="form-horizontal" action="">
                                <div class=" mb-3">
                                    <label for="exampleInputEmail1" class="form-label">Phản hồi</label>
                                    <input type="text" class="form-control" id="" name="phanhoi" value="<?= htmlspecialchars($ketqua['phan_hoi']) ?>">
                                </div>
                                <div class="">
                                    <div class=" d-grid">
                                        <button type="submit" class="btn btn-primary" name="reply">Trả lời</button>
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
<?php } else {
    header('location:login.php');
} ?>