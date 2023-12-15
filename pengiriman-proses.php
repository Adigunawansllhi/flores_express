<?php

require_once "inc/Koneksi.php";
require_once "app/Pengiriman.php";

$pengiriman = new App\Pengiriman();

if (isset($_POST['btn_simpan'])) {
    $pengiriman->simpan();
    header("location:main.php?page=pengiriman-tampil");
}

if (isset($_POST['btn_update'])) {
    $pengiriman->update();
    header("location:main.php?page=pengiriman-tampil");
}