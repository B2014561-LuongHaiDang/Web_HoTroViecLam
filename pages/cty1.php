<?php
session_start();
include('config/config.php');
$id = $_GET['id'];

$sql = "SELECT * FROM tbl_thongtintuyendung WHERE tencongty=?  and da_duyet=1";
$ketqua = $conn->prepare($sql);
$ketqua->execute([$id]);
$ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);

?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Công ty 1</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

<?php
  include "../code/head.php";
  ?>
  
  <img style="width: 100%;" src="https://dxwd4tssreb4w.cloudfront.net/web/images/default_banner_2.svg" alt="">  

  <hr />

  <div class="container">
    <div class="row ">

      <div class=" g-3 " style="background-color: #f8f9fa;">
      
        

        
        <h4 class="text-primary  ms-2 mt-2">Việc đang tuyển</h4>
       
        <div class=" bg-body text-body ms-2 mb-2 col-md-8">
        <?php foreach ($ketqua as $cty) : ?>
          <div class="border-bottom">
          <div class="row">
          
            <div class=" col-2 col-md-2" style="display: grid; place-items: center;">
              <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" src="<?= $cty['images'] ?>" />
            </div>
            <div class="col-10 col-md-10 ">
            <div class="" style="padding-top:10px"><a class="text-decoration-none text-dark h5 fw-bold " href=""><?= $cty['vitri_tuyendung'] ?></a></div>
              <div class=""><a class=" text-decoration-none text-dark h6 " href="<?= $cty['link'] ?>"><?= $cty['tencongty'] ?></a></div>
              <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
              <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
            </div>
          </div>
          </div>
          <?php endforeach ?>

        </div>
        
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