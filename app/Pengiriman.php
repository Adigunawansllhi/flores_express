<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Pengiriman extends Koneksi {
    public function count() {
        $sql = "SELECT COUNT(*) FROM pengiriman";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
    
    public function tampil()
    {
        $sql = "SELECT * FROM pengiriman
        INNER JOIN tujuan ON pengiriman.tujuan_id = tujuan.tujuan_id
        INNER JOIN kategori ON pengiriman.kategori_id = kategori.kategori_id";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        $data = [];

        while ($rows = $stmt->fetch()) {
            $data[] = $rows;
        }

        return $data;
    }

    public function simpan()
{
    $nama_pengirim = $_POST['nama_pengirim'];
    $tujuan_id = $_POST['tujuan_id'];
    $nama_penerima = $_POST['nama_penerima'];
    $telp_penerima = $_POST['telp_penerima'];
    $kategori_id = $_POST['kategori_id'];
    $qty = $_POST['qty'];
    $harga = $_POST['harga'];

    $sql = "INSERT INTO pengiriman (nama_pengirim, tujuan_id, nama_penerima, telp_penerima, kategori_id, qty, harga) VALUES (:nama_pengirim, :tujuan_id, :nama_penerima, :telp_penerima, :kategori_id, :qty, :harga)";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":nama_pengirim", $nama_pengirim);
    $stmt->bindParam(":tujuan_id", $tujuan_id);
    $stmt->bindParam(":nama_penerima", $nama_penerima);
    $stmt->bindParam(":telp_penerima", $telp_penerima);
    $stmt->bindParam(":kategori_id", $kategori_id);
    $stmt->bindParam(":qty", $qty);
    $stmt->bindParam(":harga", $harga);
    $stmt->execute();
}


    public function edit($id)
    {

        $sql = "SELECT * FROM pengiriman
                LEFT JOIN kategori ON pengiriman.kategori_id = kategori.kategori_id
                LEFT JOIN tujuan ON pengiriman.tujuan_id = tujuan.tujuan_id
                WHERE pengiriman_id=:pengiriman_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":pengiriman_id", $id);
        $stmt->execute();
    
        $row = $stmt->fetch();
        return $row;
    }

    public function update()
    {
        $nama_pengirim = $_POST['nama_pengirim'];
        $tujuan_id = $_POST['tujuan_id'];
        $nama_penerima = $_POST['nama_penerima'];
        $telp_penerima = $_POST['telp_penerima'];
        $kategori_id = $_POST['kategori_id'];
        $qty = $_POST['qty'];
        $harga = $_POST['harga'];
        $pengiriman_id = $_POST['pengiriman_id'];
    
        $sql = "UPDATE pengiriman SET nama_pengirim=:nama_pengirim, tujuan_id=:tujuan_id, nama_penerima=:nama_penerima, telp_penerima=:telp_penerima, kategori_id=:kategori_id, qty=:qty, harga=:harga WHERE pengiriman_id=:pengiriman_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_pengirim", $nama_pengirim);
        $stmt->bindParam(":tujuan_id", $tujuan_id);
        $stmt->bindParam(":nama_penerima", $nama_penerima);
        $stmt->bindParam(":telp_penerima", $telp_penerima);
        $stmt->bindParam(":kategori_id", $kategori_id);
        $stmt->bindParam(":qty", $qty);
        $stmt->bindParam(":harga", $harga);
        $stmt->bindParam(":pengiriman_id", $pengiriman_id);
        $stmt->execute();
    }
    
    public function delete($id)
    {
    $sql = "DELETE FROM pengiriman WHERE pengiriman_id=:pengiriman_id";
    $stmt = $this->db->prepare($sql);
    $stmt->bindParam(":pengiriman_id", $id);

    if ($stmt->execute()) {
        // Data deleted successfully
        $_SESSION['delete_message'] = "Data berhasil dihapus!";
    } else {
        // Error occurred
        $_SESSION['delete_message'] = "Error deleting data!";
    }
    }
}