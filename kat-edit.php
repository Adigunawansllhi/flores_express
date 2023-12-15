<?php

$id = $_GET['id'];
$kat = new App\Kategori();

$row = $kat->edit($id);
?>

<div class="card col-8 m-3">
              <div class="card-header">
                <h3 class="card-title">Edit Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="kat-proses.php" method="post">
                <input type="hidden" name="kategori_id" value="<?php echo $row['kategori_id']; ?>">

                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Kategori" name="nama_kategori" value="<?php echo $row['nama_kategori']; ?>">
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="button m-3 d-flex justify-content-between">
                  <a href="main.php?page=kat-tampil" class="btn btn-secondary">Batal</a>
                  <button type="submit" class="btn text-white" style="background-color : #001F3F;" name="btn_update">Update</button>
                </div>
              </form>
</div>