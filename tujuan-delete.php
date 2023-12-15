<?php

$id = $_GET['id'];

$tujuan = new App\Tujuan();
$rows = $tujuan->delete($id);

if (isset($_SESSION['delete_message'])) {
      $delete_message = $_SESSION['delete_message'];
      unset($_SESSION['delete_message']); // clear the session variable
  } else {
      $delete_message = "Data berhasil dihapus"; // default message if the session variable is not set
  }
  ?>
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
      Swal.fire({
      title: 'Success',
      text: '<?php echo $delete_message; ?>',
      icon: 'success',
      confirmButtonText: 'OK'
  }).then((result) => {
      if (result.isConfirmed) {
          window.location.href = 'main.php?page=tujuan-tampil';
      }
  });
  
  
 </script>

