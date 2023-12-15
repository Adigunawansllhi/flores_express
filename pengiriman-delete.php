<?php
$id = $_GET['id'];

$kat = new App\Pengiriman();
$kat->delete($id);

// Set the session message in the delete method
// Make sure session_start() is called at the beginning of your script
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
        window.location.href = 'main.php?page=pengiriman-tampil';
    }
});


</script>
