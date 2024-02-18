<?php

class Database { //
    private $servername;
    private $dbusername;
    private $dbpassword;
    private $dbname;
    private $conn;

    public function __construct($servername, $dbusername, $dbpassword, $dbname) {
        $this->servername = $servername;
        $this->dbusername = $dbusername;
        $this->dbpassword = $dbpassword;
        $this->dbname = $dbname;
    }

    public function connect() {
        $this->conn = new mysqli($this->servername, $this->dbusername, $this->dbpassword);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
        // Select the database
        $this->conn->select_db($this->dbname);
    }

    public function createDatabase() {
        $this->connect();
        $sqlCreateDatabase = "CREATE DATABASE IF NOT EXISTS " . $this->dbname;
        if ($this->conn->query($sqlCreateDatabase) === FALSE) {
            echo "Error creating database: " . $this->conn->error;
        }
    }

    public function createTableUsers() {
        $this->connect();
        $EmailMaxLength = 50;
        $tableOne = "users";
        $sqlCreateTableUsers = "CREATE TABLE IF NOT EXISTS $tableOne (
            UserID INT(11) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
            UserName VARCHAR(30) NOT NULL,
            Email VARCHAR($EmailMaxLength) UNIQUE NOT NULL,
            Password VARCHAR(60) NOT NULL,
            Role INT(1) DEFAULT 1
        )";
        if ($this->conn->query($sqlCreateTableUsers) === FALSE) {
            echo "Error creating table: " . $this->conn->error;
        }
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

$dbname = "registrationdb";
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";

$database = new Database($servername, $dbusername, $dbpassword, $dbname);
$database->createDatabase();
$database->createTableUsers();
$database->closeConnection();

?>
