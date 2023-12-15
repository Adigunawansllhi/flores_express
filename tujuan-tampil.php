<?php

$tujuan = new App\Tujuan;
$rows = $tujuan->tampil();

if (isset($_SESSION['delete_message'])) {
  echo '<script>';
  echo 'switchalert("' . $_SESSION['delete_message'] . '");';
  echo '</script>';
  unset($_SESSION['delete_message']);
}
?>

<div class="card m-3">
    <div class="card-header">
        <h3 class="card-title">Data Tujuan</h3>
    </div>
              <!-- /.card-header -->
              <div class="card-body p-0">
                <a href="main.php?page=tujuan-input" class="btn text-white m-3" style="background-color : #001F3F">Tambah Data</a>
                <table class="table table-striped text-center">
                  <thead>
                    <tr>
                      <th style="width: 10px">No</th>
                      <th>Kota Tujuan</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                        <?php 
                        $no=1;
                        foreach ($rows as $row) { 
                        ?>
                      <tr>
                          <td style="width: 10px"><?php echo $no++?></td>
                          <td><?php echo $row ['kota_tujuan']?></td>
                          <th>
                            <a href="main.php?page=tujuan-edit&id=<?php echo $row['tujuan_id']; ?>" class="btn btn-warning"> <i class="fas fa-edit"></i> </a>
                            <a href="main.php?page=tujuan-delete&id=<?php echo $row['tujuan_id']; ?>" class="btn btn-danger" onclick="return confirmDelete(event, <?php echo $row['tujuan_id']; ?>)"> <i class="fas fa-trash"></i> </a>
                          </th>
                        </tr>
                        <?php }?>
                      </tbody>
                </table>
              </div>
              <!-- /.card-body -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="path/to/script.js"></script>

<script>
    function confirmDelete(event, id) {
        event.preventDefault(); // Prevent the default link behavior

        Swal.fire({
            title: 'Anda yakin?',
            text: 'Ingin menghapus data ini!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Ya, saya yakin!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = 'main.php?page=tujuan-delete&id=' + id;
            }
        });
    }
</script>