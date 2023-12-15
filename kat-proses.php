<?php

require_once "inc/Koneksi.php";
require_once "app/Kategori.php";

$kategori = new App\Kategori();

if (isset($_POST['btn_simpan'])) {
    $kategori->simpan();
    header("location:main.php?page=kat-tampil");
}

if (isset($_POST['btn_update'])) {
    $kategori->update();
    header("location:main.php?page=kat-tampil");
}