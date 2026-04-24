<?php
session_start();

// DB connection
$conn = new mysqli("localhost", "root", "", "registration_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = $_POST['first_name'];
    $lastName = $_POST['last_name'];
    $department = $_POST['department'];
    $gender = $_POST['gender'];
    $others = $_POST['others'];

    $hobbies = isset($_POST['hobbies']) ? implode(", ", $_POST['hobbies']) : "";

    // Save to DB
    $sql = "INSERT INTO users (first_name, last_name, department, gender, hobbies, others)
            VALUES ('$firstName', '$lastName', '$department', '$gender', '$hobbies', '$others')";

    if ($conn->query($sql) === TRUE) {

        // Save in session
        $_SESSION['first_name'] = $firstName;
        $_SESSION['last_name'] = $lastName;
        $_SESSION['department'] = $department;
        $_SESSION['gender'] = $gender;
        $_SESSION['hobbies'] = $hobbies;
        $_SESSION['others'] = $others;

        header("Location: result.php");
        exit();

    } else {
        echo "Error: " . $conn->error;
    }

    $conn->close();
}
?>
