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
              <div class=""><a class=" text-decoration-none text-dark h6 " href="cty1.php?id=<?= $cty['tencongty'] ?>"><?= $cty['tencongty'] ?></a></div>
              <div class=""><a class="text-decoration-none text-dark h6 " href=""><?= $cty['vitri_congty'] ?></a></div>
              <div class=""><a class="text-decoration-none text-danger h6 fw-bold" href="">Lương: <?= $cty['mucluong_tuyendung'] ?></a></div>
            </div>
          </div>
        </div>
      <?php endforeach ?>
    </div>
  </div>