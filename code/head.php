<div class="border">
  <nav class="navbar navbar-expand-lg">
    <a class="navbar-brand fw-bold ms-2" style="color:blue">Hỗ trợ việc làm</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse bg-white" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php"><i class="fa-solid fa-house text-secondary me-1"></i>Trang chủ</a>
        </li>
      </ul>
      <div class="d-flex align-items-center me-3">
        <a class="nav-link active" aria-current="page" href="nganhnghe.php">
          <i class="fa-solid fa-magnifying-glass text-secondary me-1"></i>
          Ngành nghề/Khu vực
        </a>
      </div>
      <div class="d-flex align-items-center me-3">
        <a class="nav-link active" aria-current="page" href="camnangvieclam.php">
          <i class="fa-solid fa-book text-secondary me-1"></i>
          Cẩm nang tìm việc
        </a>
      </div>
      <div class="d-flex align-items-center me-3">
        <a class="nav-link active" aria-current="page" href="cv.php">
          <i class="fa-solid fa-receipt text-secondary me-1"></i>
          Mẫu CV xin việc
        </a>
      </div>
      
      <div class="d-flex align-items-center me-3">
        <?php
        if ((isset($_SESSION['tenkhachhang'])) || (isset($_SESSION['tencongty']))) {
          if (isset($_SESSION['tenkhachhang'])) {
            echo '<li class="nav-item dropdown"  style="list-style-type: none;">';
            echo '<a class="nav-link dropdown-toggle fw-bold text-danger" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">';
            echo "" . $_SESSION['tenkhachhang'] . "";
            echo '</a>';
            echo '<ul class="dropdown-menu">';
            echo '<li><a class="dropdown-item" href="thongtinkhachhang.php">Thông tin cá nhân</a></li>';
            echo '<li><a class="dropdown-item" href="thongtinphanhoi.php">Thông tin phản hồi</a></li>';
            echo '</ul>';
            echo '</li>';
        }else {
            echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tencongty'] . " </span>";
            echo '<span><a class="text-decoration-none text-dark ms-3" href="post_info.php"><i class="fa-regular fa-paste text-secondary"></i>Đăng tin tuyển dụng</a></span>';
          }
          echo '<span><a class="text-decoration-none text-dark ms-3" href="logout.php"><i class="fa-solid fa-right-from-bracket text-secondary"></i>Đăng xuất</a></span>';
        } else {
          echo '<div><a class="text-decoration-none text-dark " href="login.php"><i class="fa-solid fa-user text-secondary"></i> Người tìm việc</a></div>';
          echo '<div><a class="text-decoration-none text-dark ms-3 " href="loginNTD.php"><i class="fa-solid fa-building text-secondary me-1"></i>Nhà tuyển dụng</a></div>';
          echo '<div><a class="text-decoration-none text-dark ms-3 " href="../admincp/login.php"><i class="fa-solid fa-user-gear text-secondary me-1"></i>Admin</a></div>';
        }
        ?>
      </div>
    </div>
  </nav>
</div>