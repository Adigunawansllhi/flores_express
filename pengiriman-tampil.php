<?php
$pengiriman = new App\Pengiriman;

if (isset($_SESSION['delete_message'])) {
    echo '<script>';
    echo 'switchalert("' . $_SESSION['delete_message'] . '");';
    echo '</script>';
    unset($_SESSION['delete_message']);
}

$rows = $pengiriman->tampil();
?>

<div class="card m-3">
        <div class="card-header">
            <h3 class="card-title">Data Pengiriman</h3>
        </div>
        <div class="card-body p-0">
            <a href="main.php?page=pengiriman-input" class="btn text-white m-3" style="background-color : #001F3F">Tambah Data</a>
        <table class="table table-striped text-center">
            <thead>
                    <tr >
                        <th style="width: 10px">No</th>
                        <th>Nama Pengirim</th>
                        <th>Tujuan</th>
                        <th>Nama Penerima</th>
                        <th>No Telp</th>
                        <th>Kategori</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>Aksi</th>
                    </tr>
            </thead>
            <tbody>
                    <?php
                    $no = 1;
                    foreach ($rows as $row) {
                    ?>
                    <tr style="font-weight:normal;">
                        <td><?php echo $no++ ?></td>
                        <td><?php echo $row['nama_pengirim'] ?></td>
                        <td><?php echo $row['kota_tujuan'] ?></td>
                        <td><?php echo $row['nama_penerima'] ?></td>
                        <td><?php echo $row['telp_penerima'] ?></td>
                        <td><?php echo $row['nama_kategori'] ?></td>
                        <td><?php echo $row['qty'] ?></td>
                        <td><?php echo $row['harga'] ?></td>
                        <th>
                            <a href="main.php?page=pengiriman-edit&id=<?php echo $row['pengiriman_id']; ?>" class="btn btn-warning"> <i class="fas fa-edit"></i></a>
                            <a href="main.php?page=pengiriman-delete&id=<?php echo $row['pengiriman_id']; ?>" class="btn btn-danger" onclick="return confirmDelete(event, <?php echo $row['pengiriman_id']; ?>)"> <i class="fas fa-trash"></i></a>

                        </th>
                    </tr>
                      <?php } ?>
            </tbody>
        </table>
    </div>
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
                window.location.href = 'main.php?page=pengiriman-delete&id=' + id;
            }
        });
    }
</script>
