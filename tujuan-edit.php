<?php

$id = $_GET['id'];
$tujuan = new App\Tujuan();

$row = $tujuan->edit($id);
?>

<div class="card col-8 m-3">
              <div class="card-header">
                <h3 class="card-title">Edit Tujuan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="tujuan-proses.php" method="post">
                <input type="hidden" name="tujuan_id" value="<?php echo $row['tujuan_id']; ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kota Tujuan</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Kota Tujuan" name="kota_tujuan" value="<?php echo $row['kota_tujuan']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="button m-3 d-flex justify-content-between">
                  <a href="main.php?page=tujuan-tampil" class="btn btn-secondary">Batal</a>
                  <button type="submit" class="btn text-white" style="background-color : #001F3F;" name="btn_update">Update</button>
                </div>
              </form>
</div>