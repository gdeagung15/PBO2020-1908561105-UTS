<?php

class Database {
    private $conn;
    public function __construct() {
        $this->conn = new mysqli("localhost", "root", "", "pbo2020-uts-1908561105");
    }

    public function getConn() {
        return $this->conn;
    }

}