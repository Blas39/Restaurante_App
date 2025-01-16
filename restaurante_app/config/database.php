<?php
class Database {
    private $host = "localhost";
    private $db_name = "restaurante";
    private $username = "root";
    private $password = "";
    public $conn;
    public function connect() {
        $this->conn = null;
        try {
            $this->conn = new PDO("mysql:host=$this->host;dbname=$this->db_name", $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Error en la conexión: " . $e->getMessage();
        }
        return $this->conn;
    }
}