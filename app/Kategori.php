<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Kategori extends Koneksi {
    public function count() {
        $sql = "SELECT COUNT(*) FROM kategori";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
    public function tampil()
    {
        $sql = "SELECT * FROM kategori";
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
        $nama_kategori = $_POST['nama_kategori'];

        $sql = "INSERT INTO kategori (nama_kategori) VALUES (:nama_kategori)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_kategori", $nama_kategori);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM kategori WHERE kategori_id=:kategori_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kategori_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $nama_kategori = $_POST['nama_kategori'];
        $kategori_id = $_POST['kategori_id'];

        $sql = "UPDATE kategori SET nama_kategori=:nama_kategori WHERE kategori_id=:kategori_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":nama_kategori", $nama_kategori);
        $stmt->bindParam(":kategori_id", $kategori_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM kategori WHERE kategori_id=:kategori_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kategori_id", $id);
        $stmt->execute();

        if ($stmt->execute()) {
            // Data deleted successfully
            $_SESSION['delete_message'] = "Data berhasil dihapus!";
        } else {
            // Error occurred
            $_SESSION['delete_message'] = "Error deleting data!";
        }
        }

}

