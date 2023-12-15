<?php

require_once "inc/Koneksi.php";
require_once "app/Tujuan.php";

$tujuan = new App\Tujuan();

if (isset($_POST['btn_simpan'])) {
    $tujuan->simpan();
    header("location:main.php?page=tujuan-tampil");
}

if (isset($_POST['btn_update'])) {
    $tujuan->update();
    header("location:main.php?page=tujuan-tampil");
}