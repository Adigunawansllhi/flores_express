<?php
  $kategori = new App\Kategori;
  $tujuan = new App\Tujuan;
  $kategoris = $kategori->tampil();
  $tujuans = $tujuan->tampil();
?>
<div class="card col-8 m-3" >
              <div class="card-header">
                <h3 class="card-title">Tambah Pengiriman</h3>
              </div>
              <form action="pengiriman-proses.php" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pengirim</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Pengirim" name="nama_pengirim">
                  </div>
                  <div class="form-group">
                        <label>Tujuan</label>
                        <select class="form-control" name="tujuan_id">
                        <Option>Pilih Tujuan</Option require>
                          <?php
                            foreach($tujuans as $row) {?>
                            <option value="<?php echo $row['tujuan_id']?>"><?php echo $row['kota_tujuan']?></option>
                         <?php }?>
                        </select>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nama Penerima</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Penerima" name="nama_penerima">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">No Telp</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No Telp" name="telp_penerima">
                  </div>
                  <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori_id">
                        <Option>Pilih Kategori</Option require>
                          <?php
                            foreach($kategoris as $row) {?>
                            <option value="<?php echo $row['kategori_id']?>"><?php echo $row['nama_kategori']?></option>
                         <?php }?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Qty</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Qty" name="qty">
                    </div>
                  <div class="form-group">
                        <label for="exampleInputPassword1">Harga</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="button m-3 d-flex justify-content-around">
                  <a href="main.php?page=pengiriman-tampil" class="btn btn-secondary">Batal</a>
                  <button type="submit" class="btn text-white" style="background-color : #001F3F;" name="btn_simpan">Tambah</button>
                </div>
                
              </form>
</div>