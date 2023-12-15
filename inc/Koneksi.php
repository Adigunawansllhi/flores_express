<?php

namespace Inc;

class Koneksi {

    public object $db;

    public function __construct() {
        $this->db = new \PDO("mysql:host=localhost;dbname=flores_express", "root", "");
    }
}



?>