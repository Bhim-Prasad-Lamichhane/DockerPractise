<?php
require_once 'config/database.php';

class Student {
    private $conn;
    private $table_name = "student_info";

    public $name;
    public $age;
    public $address;

    public function __construct() {
        $database = new Database();
        $this->conn = $database->getConnection();
    }

    public function create() {
        $query = "INSERT INTO " . $this->table_name . " (name, age, address) VALUES (:name, :age, :address)";

        $stmt = $this->conn->prepare($query);

        $stmt->bindParam(':name', $this->name);
        $stmt->bindParam(':age', $this->age);
        $stmt->bindParam(':address', $this->address);

        if ($stmt->execute()) {
            return true;
        }

        return false;
    }
}
?>
