<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $_SESSION['first_name'] = $_POST['first_name'];
    $_SESSION['last_name'] = $_POST['last_name'];
    $_SESSION['department'] = $_POST['department'];
    $_SESSION['gender'] = $_POST['gender'];
    $_SESSION['others'] = $_POST['others'];

    $_SESSION['hobbies'] = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

    header("Location: result.php");
    exit();
}
?>
