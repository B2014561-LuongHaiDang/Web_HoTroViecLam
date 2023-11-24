<?php
session_start();
include('config/config.php');
$sql = "select * from tbl_thongtintuyendung where da_duyet=1 order by created_at desc";
$ketqua = $conn->prepare($sql);
$ketqua->execute();
$ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['button'])) {
    $noidung = $_GET['nghenghiep'];
    $nd = $_GET['khuvuc'];
    $sql = "SELECT * FROM tbl_thongtintuyendung where vitri_tuyendung like ? and vitri_congty like ? and da_duyet=1 ";

    $ketqua = $conn->prepare($sql);

    $ketqua->execute(["%$noidung%", "%$nd%"]);

    $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
    if (empty($ketqua)) {
      echo '
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
        <script type="text/javascript">
        $(document).ready(function(){
        swal({
        type: "error",
        title: "Không tìm thấy",
        icon: "info",
        showConfirmButton: true,
        })
        });
        </script>';
    }
  }
}


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Tìm kiếm việc làm</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
  <?php
  include "../code/head.php";
  ?>

  <div class="container d-flex align-items-center mt-3">
    <form method="GET">
      <input style="height: 36px;" type="text" name="nghenghiep" placeholder="Nhập tên công việc" />
      <input style="height: 36px;" type="text" name="khuvuc" class="ms-1" placeholder="Nhập tỉnh/thành phố" />
      <button type="submit" name="button" class="btn btn-primary ms-1" style="height: 35px; margin-bottom:6px">Tìm kiếm</button>
    </form>
  </div>

  <div class="container">
    <div class=" h4 fw-bold mb-2" style="padding-top:25px">Kết quả tìm kiếm</div>
    <div class="row">
      <div class="col-12 col-md-8" style="background-color: #f8f9fa;">
        <?php foreach ($ketqua as $cty) : ?>
          <div class="border bg-body text-body mb-2">
            <div class="row">
              <div class=" col-4 col-md-2" style="display: grid; place-items: center;">
                <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" src="<?= $cty['images'] ?>" />
              </div>
              <div class="col-8 col-md-10 mt-2 mb-2">
                <div class=""><a class="text-decoration-none text-dark h5 fw-bold " href="cty1.php"><?= $cty['vitri_tuyendung'] ?></a></div>
                <div class=""><a class=" text-decoration-none text-dark h6 " href="cty1.php?id=<?= $cty['tencongty'] ?>"><?= $cty['tencongty'] ?></a></div>
                <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
                <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
              </div>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </div>
  <hr />

  <?php
  include "../code/footer.php";
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>