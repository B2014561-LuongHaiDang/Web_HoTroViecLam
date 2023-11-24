<?php
session_start();
include('../pages/config/config.php');
if(isset($_SESSION['loginAD'])){
$sql = "select * from tbl_phanhoikhachhang where gia_tri=0";
$ketqua = $conn->prepare($sql);
$ketqua->execute();
$ketqua = $ketqua->fetchAll();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phản hồi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>

<body>
    <div class="h1 text-center text-info mt-3">PHẢN HỒI KHÁCH HÀNG</div>
    <a href="index.php"><input type="submit" name="submit" class="" value="Trở lại giao diện chính"></a>
    <div class="row mt-2">

        <div class="col-10 col-md-10 offset-1">
            <?php foreach ($ketqua as $cty) : ?>


                <div class="border text-body mt-4" style="background-color: #f8f9fa;">
                    <div class="row">
                        <div class="col-10 col-md-10">
                            <div class="ms-2 me-2 mt-2"><a class="text-decoration-none text-dark ">Email phản hồi : <?= $cty['email'] ?></a></div>
                            <div class="ms-2 me-2"><a class="text-decoration-none text-dark ">Phản hồi : <?= $cty['nhanxet'] ?></a></div>
                            <div class="ms-2 me-2 mb-2"><a class="text-decoration-none text-dark ">Thời gian phản hồi : <?= $cty['ngay_nhanxet'] ?></a></div>
                        </div>
                        <div class="col-2 col-md-2 d-flex align-items-center">
                            <form><a href="reply.php?id=<?= $cty['id_phanhoikhachhang'] ?>" class="btn btn-outline-success">Phản hồi</a></form>
                        </div>
                    </div>
                </div>

            <?php endforeach ?>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>

</html>