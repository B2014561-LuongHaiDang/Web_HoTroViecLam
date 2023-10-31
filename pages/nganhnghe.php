<?php
session_start();
include('config/config.php');
$sql = "select * from tbl_thongtintuyendung where da_duyet=1";
$ketqua = $conn->prepare($sql);
$ketqua->execute();
$ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
  if (isset($_GET['button'])) {
    $noidung = $_GET['nghenghiep'];
    $nd = $_GET['khuvuc'];
    $sql = "SELECT * FROM tbl_thongtintuyendung where vitri_tuyendung like ? and vitri_congty like ? and da_duyet=1 ";

    $ketqua = $conn->prepare($sql);

    $ketqua->execute(["%$noidung%","%$nd%"]);

    $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
  }
  
};
// if ($_SERVER['REQUEST_METHOD'] === 'GET') {
// if (isset($_GET['bt'])) {
//   $nd = $_GET['khuvuc'];

//   $sql = "SELECT * FROM tbl_thongtintuyendung where vitri_congty like ? and da_duyet=1";

//   $ketqua = $conn->prepare($sql);

//   $ketqua->execute(["%$nd%"]);

//   $ketqua = $ketqua->fetchAll(PDO::FETCH_ASSOC);
// }
// };


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

  <div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex align-items-center">

            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house text-success"></i>Trang chủ</a>
            </li>

            <li class="nav-item">
              <form method="GET">
                <input type="text" name="nghenghiep" placeholder="Ngành nghề">
                <input type="text" name="khuvuc" placeholder="Địa điểm">
                <button type="submit" name="button">Tìm</button>
              </form>
            </li>

            <!-- <li class="nav-item ms-3">
              <form method="GET">
                <input type="text" name="khuvuc" placeholder="Địa điểm">
                <button type="submit" name="bt">Tìm</button>
              </form>
            </li> -->
            <!-- <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fa-solid fa-location-dot text-success"></i>Khu vực</a>

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

            </li> -->
            

          </ul>

          <div class="d-flex align-items-center">
            <?php
            if ((isset($_SESSION['tenkhachhang'])) || (isset($_SESSION['tencongty']))) {
              if ((isset($_SESSION['tenkhachhang']))) {
                echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tenkhachhang'] . "</span>";
              } else {
                echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tencongty'] . " </span>";
                echo '<span><a class="text-decoration-none text-dark ms-3" href="">Đăng tin tuyển dụng</a></span>';
              }

              echo '<span><a class="text-decoration-none text-dark ms-3" href="logout.php">Đăng xuất</a></span>';
            } else {
              echo '<div><a class="text-decoration-none text-dark " href="login.php"><i class="fa-solid fa-user text-success"></i> Người tìm việc</a></div>';
              echo '<div><a class="text-decoration-none text-dark ms-3 " href="http://localhost/web_mysqli/pages/nhatuyendung/login.php"><i class="fa-solid fa-building text-success"></i>Nhà tuyển dụng</a></div>';
            }
            ?>
            </button></div>
        </div>
      </div>
    </nav>
  </div>



  <img style="width: 100%;" src="images/anhdaidien.jpg" alt="">




  <div class="container h3 fw-bold" style="padding-top:25px">Việc làm hấp dẫn</div>

  <?php
  include "../code/info.php";
  ?>


  <hr />

  <?php
  include "../code/footer.php";
  ?>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>


</body>

</html>