<?php
require "connect-database.php";

class UserDetail {
    public $username;
    public $email;
    public $password;
    private $conn;

    public function __construct($conn, $username, $email, $password) {
        $this->conn = $conn;
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
    }

    public function registration() {
        $passwordHash = password_hash($this->password, PASSWORD_DEFAULT);

        // Prepare and bind the INSERT statement
        $stmt = $this->conn->prepare("INSERT INTO users (UserName, Email, Password) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $this->username, $this->email, $passwordHash);

        // Execute the statement
        if ($stmt->execute()) {
            return "User registered successfully!";
        } else {
            return "Error registering user: " . $stmt->error;
        }
    }
}

// Establish database connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['inputUsername'] ?? '';
    $email = $_POST['inputEmail'] ?? '';
    $password = $_POST['inputPassword'] ?? '';

    // Create UserDetail object with database connection
    $user = new UserDetail($conn, $username, $email, $password);

    // Call the registration method
    $registrationMessage = $user->registration();

    // Output the registration message
    echo $registrationMessage;
}

// Close the database connection
$conn->close();
?>