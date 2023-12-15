<?php

$id = $_GET['id'];
$pengiriman = new App\Pengiriman();

$tujuan = new App\Tujuan;
$rowsTujuan = $tujuan->tampil();

$kategori = new App\Kategori;
$rowsKat = $kategori->tampil();

$row = $pengiriman->edit($id);
?>

<div class="card col-8 m-3">
  <div class="card-header">
    <h3 class="card-title">Edit Pengiriman</h3>
  </div>
  <form action="pengiriman-proses.php" method="post">
    <input type="hidden" name="pengiriman_id" value="<?php echo $row['pengiriman_id']; ?>">
    <div class="card-body">
      <div class="form-group">
        <label for="exampleInputEmail1">Nama Pengirim</label>
        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nama Penerima" name="nama_pengirim" value="<?php echo $row['nama_pengirim']; ?>">
      </div>
      <div class="form-group">
        <label>Tujuan</label>
        <select class="form-control" name="tujuan_id" required>
          <option value="<?php echo $row['tujuan_id']; ?>">
            <?php echo $row['kota_tujuan']; ?>
          </option>
          <?php foreach ($rowsTujuan as $rowTujuan) { ?>
            <option value="<?php echo $rowTujuan['tujuan_id']; ?>" <?php echo (property_exists($kategori, 'kategori_id') && $rowKat['kategori_id'] == $kategori->kategori_id) ? 'selected' : ''; ?>>
              <?php echo $rowTujuan['kota_tujuan']; ?>
            </option>
          <?php } ?>
        </select>
      </div>

      <div class="form-group">
        <label for="exampleInputPassword1">Nama Penerima</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nama Penerima" name="nama_penerima" value="<?php echo $row['nama_penerima']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">No Telp</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="No Telp" name="telp_penerima" value="<?php echo $row['telp_penerima']; ?>">
      </div>
      <div class="form-group">
        <label>Kategori</label>
        <select class="form-control" name="kategori_id">
          <option value="<?php echo $row['kategori_id']; ?>">
            <?php echo $row['nama_kategori']; ?>
          </option>
          <?php foreach ($rowsKat as $rowKat) { ?>
            <option value="<?php echo $rowKat['kategori_id']; ?>" <?php echo (property_exists($kategori, 'kategori_id') && $rowKat['kategori_id'] == $kategori->kategori_id) ? 'selected' : ''; ?>>
              <?php echo $rowKat['nama_kategori']; ?>
            </option>
          <?php } ?>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Qty</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Qty" name="qty" value="<?php echo $row['qty']; ?>">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Harga</label>
        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Harga" name="harga" value="<?php echo $row['harga']; ?>">
      </div>
    </div>
    <!-- /.card-body -->

    <div class="button m-3 d-flex justify-content-between">
      <a href="main.php?page=pengiriman-tampil" class="btn btn-secondary">Batal</a>
      <button type="submit" class="btn text-white" style="background-color : #001F3F;" name="btn_update">Update</button>
    </div>
  </form>
</div>