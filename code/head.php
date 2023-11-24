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
          if ((isset($_SESSION['tenkhachhang']))) {
            echo "<span><a class='text-decoration-none ms-1 text-capitalize fw-bold' style='color:red'>" . $_SESSION['tenkhachhang'] . "</a></span>";
          } else {
            echo "<span class='text-capitalize fw-bold' style='color:red'>" . $_SESSION['tencongty'] . " </span>";
            echo '<span><a class="text-decoration-none text-dark ms-3" href="nhatuyendung/post_info.php"><i class="fa-regular fa-paste text-secondary"></i>Đăng tin tuyển dụng</a></span>';
          }
          echo '<span><a class="text-decoration-none text-dark ms-3" href="logout.php"><i class="fa-solid fa-right-from-bracket text-secondary"></i>Đăng xuất</a></span>';
        } else {
          echo '<div><a class="text-decoration-none text-dark " href="login.php"><i class="fa-solid fa-user text-secondary"></i> Người tìm việc</a></div>';
          echo '<div><a class="text-decoration-none text-dark ms-3 " href="http://localhost/web_mysqli/pages/nhatuyendung/login.php"><i class="fa-solid fa-building text-secondary me-1"></i>Nhà tuyển dụng</a></div>';
        }
        ?>
        <div><a class="text-decoration-none text-dark ms-3 " href="../admincp/login.php"><i class="fa-solid fa-user-gear text-secondary me-1"></i>Admin</a></div>
      </div>
    </div>
  </nav>
</div>