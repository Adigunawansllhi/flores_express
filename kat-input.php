
<div class="card col-8 m-3">
              <div class="card-header">
                <h3 class="card-title">Tambah Kategori</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="kat-proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Kategori</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Kategori" name="nama_kategori">
                  </div>
                </div>
                <!-- /.card-body -->

                 <div class="button m-3 d-flex justify-content-between">
                  <a href="main.php?page=tujuan-tampil" class="btn btn-secondary">Batal</a>
                  <button type="submit" class="btn text-white" style="background-color : #001F3F;" name="btn_simpan">Tambah</button>
                </div>
              </form>
</div>