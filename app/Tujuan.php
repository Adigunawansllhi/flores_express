<?php

namespace App;
use Inc\Koneksi as Koneksi;

class Tujuan extends Koneksi {

    public function count() {
        $sql = "SELECT COUNT(*) FROM tujuan";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();

        return $stmt->fetchColumn();
    }
    public function tampil()
    {
        $sql = "SELECT * FROM tujuan";
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
        $kota_tujuan = $_POST['kota_tujuan'];

        $sql = "INSERT INTO tujuan (kota_tujuan) VALUES (:kota_tujuan)";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kota_tujuan", $kota_tujuan);
        $stmt->execute();

    }

    public function edit($id)
    {

        $sql = "SELECT * FROM tujuan WHERE tujuan_id=:tujuan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tujuan_id", $id);
        $stmt->execute();

        $row = $stmt->fetch();

        return $row;
    }

    public function update()
    {
        $kota_tujuan = $_POST['kota_tujuan'];
        $tujuan_id = $_POST['tujuan_id'];

        $sql = "UPDATE tujuan SET kota_tujuan=:kota_tujuan WHERE tujuan_id=:tujuan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":kota_tujuan", $kota_tujuan);
        $stmt->bindParam(":tujuan_id", $tujuan_id);
        $stmt->execute();

    }

    public function delete($id)
    {

        $sql = "DELETE FROM tujuan WHERE tujuan_id=:tujuan_id";
        $stmt = $this->db->prepare($sql);
        $stmt->bindParam(":tujuan_id", $id);
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

