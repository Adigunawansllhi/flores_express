<?php
$pengiriman = new App\Pengiriman;
$send = $pengiriman->count();

$tujuan = new App\Tujuan;
$tuju = $tujuan->count();


$kategori = new App\Kategori;
$kat = $kategori->count();
?>


<section class="content m-3 mb-4">
  <div class="home-card card card card-outline shadow bg-body-tertiary rounded-bottom-20 " style="background-color :  #eff0f3;">
    <div class="card-body box-profile">
      <div class="text-center" style="color : #001F3F">
        <h3>Welcome to Floress Express</h3>

      </div>
    </div>
    <!-- /.card-body -->
  </div>
</section>

<section class="content col-10 m-auto mt-4">
  <div class="info d-flex col-12 justify-content-center">
    <div class="container-fluid">
      <div class="row">
        <div class="col-lg-4 col-6">
          <div class="small-box" style="background-color : #eff0f3" ;>
            <div class="inner">
              <h3><?php echo $pengiriman->count() ?><sup style="font-size: 20px; color : #001F3F"></sup></h3>
              <p>Pengiriman</p>
            </div>
            <div class="link" style="background-color : #001F3F;">
              <div class="icon">
                <i class=" nav-icon fas fa-shipping-fast"></i>
              </div>
              <a href="main.php?page=pengiriman-tampil" class="small-box-footer text-white p-3">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box" style="background-color : #eff0f3" ;>
            <div class="inner">
              <h3><?php echo $tujuan->count() ?><sup style="font-size: 20px; color : #001F3F"></sup></h3>
              <p>Kota Tujuan</p>
            </div>
            <div class="link" style="background-color : #001F3F;">
              <div class="icon">
                <i class="nav-icon fas fa-city"></i>
              </div>
              <a href="main.php?page=tujuan-tampil" class="small-box-footer text-white p-3">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-6">
          <div class="small-box" style="background-color : #eff0f3" ;>
            <div class="inner">
              <h3><?php echo $kategori->count() ?><sup style="font-size: 20px; color : #001F3F"></sup></h3>
              <p>Kategori</p>
            </div>
            <div class="link" style="background-color : #001F3F;">
              <div class="icon">
                <i class="nav-icon fas fa-list"></i>
              </div>
              <a href="main.php?page=kat-tampil" class="small-box-footer text-white p-3">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
</section>