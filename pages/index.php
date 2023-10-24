<?php
session_start();
include('config/config.php');
$sql = "select * from tbl_thongtintuyendung where da_duyet=1";
$ketqua = $conn->query($sql);
$ketqua = $ketqua->fetchAll();


?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Tìm kiếm việc làm</title>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>

  <div>
    <nav class="navbar navbar-expand-lg" style="height:60px">
      <div class="container">
        <a class="navbar-brand fw-bold" style="color:red">Hỗ trợ việc làm</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" style="color: green;" class="bi bi-house" viewBox="0 0 16 20">
                  <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.707 1.5ZM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5 5 5Z" />
                </svg>Trang chủ</a>
            </li>

            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="nganhnghe.php"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" style="color: green;" class="bi bi-book" viewBox="0 0 16 20">
                  <path d="M1 2.828c.885-.37 2.154-.769 3.388-.893 1.33-.134 2.458.063 3.112.752v9.746c-.935-.53-2.12-.603-3.213-.493-1.18.12-2.37.461-3.287.811V2.828zm7.5-.141c.654-.689 1.782-.886 3.112-.752 1.234.124 2.503.523 3.388.893v9.923c-.918-.35-2.107-.692-3.287-.81-1.094-.111-2.278-.039-3.213.492V2.687zM8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>Ngành nghề</a>
            </li>


            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-geo-alt-fill" style="color: green;" viewBox="0 0 16 20">
                  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z" />
                </svg>Khu vực</a>

              <ul class="dropdown-menu" style="width: 100px; height: 200px; border: 1px #e0d8d8; overflow-y: scroll;">
                <li><a href="khuvucmienbac.html" class="dropdown-item">An Giang</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Bà Rịa – Vũng Tàu</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Bắc Giang</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Bắc Kạn</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Bạc Liêu</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Bắc Ninh</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item"> Bến Tre</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Bình Định</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Bình Dương</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Bình Phước</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Bình Thuận</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Cà Mau</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Cần Thơ</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Đà Nẵng</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Đắk Lắk</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Đắk Nông</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Điện Biên</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Đồng Tháp</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Gia Lai</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Hà Giang</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Hà Nam</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Hà Nội</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Hà Tĩnh</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Hải Dương</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Hải Phòng</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Hậu Giang</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Hòa Bình</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Hưng Yên</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Khánh Hòa</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Kiên Giang</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Kon Tum</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Lai Châu</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Lâm Đồng</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Lạng Sơn</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Lào Cai</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Long An</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Nam Định</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Nghệ An</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Ninh Bình</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Ninh Thuận</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Phú Thọ</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Phú Yên</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Quảng Bình</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Quảng Nam</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Quảng Ngãi</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Quảng Ninh</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Quảng Trị</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Sóc Trăng</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Sơn La</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Tây Ninh</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Thái Bình</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Thái Nguyên</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Thanh Hóa</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Thừa Thiên Huế</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Tiền Giang</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">TP Hồ Chí Minh</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Trà Vinh</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Tuyên Quang</a></li>
                <li><a href="khuvucmienbac.html" class="dropdown-item">Vĩnh Long</a></li>
                <li><a href="khuvucmientrung.html" class="dropdown-item">Vĩnh Phúc</a></li>
                <li><a href="khuvucmiennam.html" class="dropdown-item">Yên Bái</a></li>
              </ul>

            </li>
            </li>

          </ul>

          <div><button type="button" class="btn btn-white text-dark">
              <?php
              if ((isset($_SESSION['tenkhachhang'])) || (isset($_SESSION['tencongty']))) {
                if ((isset($_SESSION['tenkhachhang']))) {
                  echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tenkhachhang'] . "</span>";
                } else {
                  echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tencongty'] . " </span>";
                  echo '<span><a class="text-decoration-none text-dark ms-2" href="">| Đăng tin tuyển dụng</a></span>';
                }

                echo '<span><a class="text-decoration-none text-dark ms-2" href="logout.php">| Đăng xuất</a></span>';
              } else {
                echo '<a class="text-decoration-none text-dark " href="login.php">| Người tìm việc</a>';
                echo '<div><a href="http://localhost/web_mysqli/pages/nhatuyendung/login.php"><button type="button" class="btn btn-white text-dark">| Nhà tuyển dụng</button></a></div>';
              }
              ?>
            </button></div>
        </div>
      </div>
    </nav>
  </div>



  <img style="width: 100%;" src="images/anhdaidien.jpg" alt="">




  <div class="container h3 fw-bold" style="padding-top:25px">Việc làm hấp dẫn</div>

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
              <div class=""><a class=" text-decoration-none text-dark h6 " href="company_profile_cty1/cty1.php?id=<?= $cty['tencongty'] ?>"><?= $cty['tencongty'] ?></a></div>
              <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
              <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>


  <hr />

  <div class="text-center" style="background-color:#e0d8d8 ; padding-bottom:50px;padding-top:50px;">
    <div class="row">

      <div class="col-sm-4 col-md-4 h4">Về hỗ trợ việc làm
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Về chúng tôi</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Liên hệ</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Thỏa thuận người dùng</a>
        </div>
      </div>

      <div class="col-sm-4 col-md-4 h4">Dành cho ứng viên
        <div class="h5 ms-2"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Việc làm</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Cẩm nang xin việc</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Mẫu CV xin việc</a>
        </div>
      </div>

      <div class="col-sm-4 col-md-4 h4">Việc làm theo khu vực
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Hồ Chí Minh</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Cần Thơ</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Bạc Liêu</a>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-sm-4 col-md-4 h4">Chứng nhận
        <div>
          <img class="img-fluid" src="images/chungnhan.png" />
        </div>
      </div>
      <div class="col-sm-4 col-md-4 h4">Dành cho nhà tuyển dụng
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Dịch vụ</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Cẩm nang tuyển dụng</a>
        </div>
      </div>
      <div class="col-sm-4 col-md-4 h4">Việc làm theo ngành nghề
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Quản trị kinh doanh</a>
        </div>
        <div class="h5"><a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="#">Kế toán</a>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>