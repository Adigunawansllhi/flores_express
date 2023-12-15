<?php

namespace App;
use Inc\Koneksi;

class Login extends Koneksi {
    public function cekLogin($username, $password) {
        $query = "SELECT * FROM user WHERE username = :username AND password = :password";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':username', $username);
        $stmt->bindParam(':password', $password);
        $stmt->execute();

        $rowCount = $stmt->rowCount();

        if ($rowCount == 1) {
            $user = $stmt->fetch(\PDO::FETCH_ASSOC); // Use \PDO::FETCH_ASSOC to fetch an associative array
            session_start();
            $_SESSION['nama'] = $user['nama'];
            // $_SESSION['level'] = $user['level'];
            header('Location: main.php'); // Change this according to your path
        } else {
            // header('Location: index.php?error=1'); // Change this according to your path
        }
    }
}
