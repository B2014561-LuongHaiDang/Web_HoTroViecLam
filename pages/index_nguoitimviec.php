<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Tìm kiếm việc làm</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>


    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid container">
            <a class="navbar-brand">Hỗ trợ việc làm</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Trang chủ</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Ngành nghề</a>
                    </li>


                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Khu vực
                        </a>

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
                <div>
                <form class="d-flex" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>
                </div>

                <div class="ps-2 fw-bold"><?php
                        if (isset($_SESSION['dangnhap'])) {
                            echo $_SESSION['dangnhap'];
                        }
                        ?></div>
                <div><a href="#"><button type="button" class="btn btn-white text-dark">| Người tìm việc</button></a></div>
                <div><a href="logout.php"><button type="button" class="btn btn-white text-dark">Đăng xuất</button></a></div>
            </div>
        </div>
    </nav>

    <!-- Ảnh chèn link -->
    <div class="container text-center">
        <img class="img-fluid" src="images/anhdaidien.jpg" />
    </div>

    <hr />

    <div class="container">
    <div class="row">

      <!-- CTY 1 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 90px" src="images/logo_cty1.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="company_profile_cty1/cty1.php">TRỢ LÝ GIÁM ĐỐC</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8;"><a class=" text-decoration-none text-dark h6" href="company_profile_cty1/cty1.php">CÔNG TY TNHH TẬP ĐOÀN THÀNH CÔNG</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Hồ Chí Minh</a></div>
          </div>
        </div>
      </div>

      <!-- CTY 2 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 70px; padding-top:17px" src="images/logo_cty2.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">KẾ TOÁN TỔNG HỢP</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8;"><a class=" text-decoration-none text-dark h6" href="#">CÔNG TY CỔ PHẦN THÉP</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Hưng Yên</a></div>
          </div>
        </div>
      </div>

      <!-- CTY 3 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 50px; padding-top:30px" src="images/logo_cty3.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">KĨ THUẬT CƠ KHÍ</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8;"><a class=" text-decoration-none text-dark h6" href="#">CÔNG TY TNHH VIỆT Á CHÂU</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Bà Rịa - Vũng Tàu</a></div>
          </div>
        </div>
      </div>

    </div>
  </div>



  <div class="container">
    <div class="row">

      <!-- CTY 4 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 60px; padding-top: 25px;" src="images/logo_cty4.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">NHÂN VIÊN KINHH DOANH</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8;"><a class=" text-decoration-none text-dark h6" href="">CÔNG TY CỔ PHẦN ANITIME</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Hồ Chí Minh</a></div>
          </div>
        </div>
      </div>

      <!-- CTY 5 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 80px; padding-top:8px" src="images/logo_cty5.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">NHÂN VIÊN QUẢNG CÁO</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8; "><a class=" text-decoration-none text-dark h6" href="">TẬP ĐOÀN AN PHÁT HOLDINGS</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Hà Nội</a></div>
          </div>
        </div>
      </div>

      <!-- CTY 6 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 85px" src="images/logo_cty6.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">NHÂN VIÊN PHỤ KHO</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8;"><a class=" text-decoration-none text-dark h6" href="">CÔNG TY OPPO VIỆT NAM</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Hà Nội</a></div>
          </div>
        </div>
      </div>


    </div>
  </div>


  <div class="container">
    <div class="row">

      <!-- CTY 7 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 60px; padding-top:30px" src="images/logo_cty7.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">NHÂN VIÊN BÁN HÀNG</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8; overflow-x:hidden"><a class=" text-decoration-none text-dark h6" href="">CÔNG TY CỔ PHẦN KĨ THUẬT SỐ FPT</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Bình Dương</a></div>
          </div>
        </div>
      </div>

      <!-- CTY 8 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 75px; padding-top: 12px;" src="images/logo_cty8.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">TƯ VẤN VIÊN</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8; overflow-x:hidden"><a class=" text-decoration-none text-dark h6" href="">CÔNG TY CỔ PHẦN VÀNG BẠC ĐÁ QUÝ</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Bà Rịa - Vũng Tàu</a></div>
          </div>
        </div>
      </div>

      <!-- CTY 9 -->
      <div class=" col sm-4 md-4">
        <div class="row">
          <div class="col-sm-6 col-md-3">
            <img class="img-fluid hot-job__logo img-thumbnail mr-2 mr-sm-3 border-0 bg-white" style="width: 90px; height: 90px" src="images/logo_cty9.png" />
          </div>
          <div class="col-sm-6 col-md-9 py-1">
            <div><a class="text-decoration-none text-dark h4 " href="">NHÂN VIÊN KẾ TOÁN</a></div>
            <div class="" style="width: 350px; height: 20px; border: 1px #e0d8d8; overflow-x:hidden"><a class=" text-decoration-none text-dark h6" href="">TẬP ĐOÀN GIÁO DỤC RES</a></div>
            <div><a class="text-decoration-none text-dark h6 " href="">Cần Thơ</a></div>
          </div>
        </div>
      </div>


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