<?php



class DatabaseConnection {
    private $servername;
    private $username;
    private $password;
    private $dbname;
    private $conn;

    // Constructor to initialize the connection parameters
    public function __construct($servername, $username, $password, $dbname) {
        $this->servername = $servername;
        $this->username = $username;
        $this->password = $password;
        $this->dbname = $dbname;
    }

    // Method to establish a database connection
    public function connect() {
        $this->conn = new mysqli($this->servername, $this->username, $this->password, $this->dbname);

        // Check connection
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }

        echo "Connected successfully";
    }

    // Method to close the database connection
    public function closeConnection() {
        $this->conn->close();
        echo "Connection closed";
    }

    // Additional methods for executing queries, etc. can be added here
}

// Usage:
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Create a new instance of DatabaseConnection
$dbConnection = new DatabaseConnection($servername, $username, $password, $dbname);

// Connect to the database
$dbConnection->connect();

// Perform database operations...

// Close the database connection when done
$dbConnection->closeConnection();

?>
