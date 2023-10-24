<?php
session_start();
include('config/config.php');
$sql = "select * from tbl_thongtintuyendung where da_duyet=1";
$ketqua = $conn->query($sql);
$ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['delete'])){
        $id=$_POST['id'];
        $sql="UPDATE tbl_thongtintuyendung SET da_duyet=0  where id_thongtintuyendung=?";
        $ketqua = $conn->prepare($sql);
        $ketqua->execute([$id]);
        header("Location:delete.php");
    }
};
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Quản lí</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>
    <div><a href="index.php">Quay lại</a></div>


    <div class="container" style="padding-top:25px">
        <div class="row">
            <?php foreach ($ketqua as $cty) : ?>
                
                <div class=" col-md-4 border">
                    <div class="row">
                        <div class="col-sm-6 col-md-3" style="display: grid; place-items: center;">
                            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" src="<?= $cty['images'] ?>" />
                        </div>

                        <div class="col-sm-6 col-md-9 ">
                            <div class="" style="padding-top:10px"><a class="text-decoration-none text-dark h5 fw-bold " href="company_profile_cty1/cty1.php"><?= $cty['vitri_tuyendung'] ?></a></div>
                            <div class=""><a class=" text-decoration-none text-dark h6 " href="company_profile_cty1/cty1.php"><?= $cty['tencongty'] ?></a></div>
                            <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
                            <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
                            
                            <form  method="POST"><input type="submit" name="delete" class="btn btn-outline-dark" value="Xóa"><input type="hidden" name="id" value="<?= $cty['id_thongtintuyendung'] ?>"></form>
                            
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>