<?php
require_once 'models/Student.php';

class StudentController {
    public function create() {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $student = new Student();
            $student->name = $_POST['name'];
            $student->age = $_POST['age'];
            $student->address = $_POST['address'];

            if ($student->create()) {
                include 'views/student_form.php';
            } else {
                echo "Error: Unable to save student information.";
            }
        } else {
            include 'views/student_form.php';
        }
    }
}
?>
