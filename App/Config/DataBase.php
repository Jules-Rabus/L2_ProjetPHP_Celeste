<?php

namespace App\Config;

use PDO;

class DataBase{

    private $host = "xxx";
    private $db_name = "xxx";
    private $username = "xxx";
    private $password = "xxx";
    private $conn;

    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        }
        catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}
