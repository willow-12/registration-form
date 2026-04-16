<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $firstName = htmlspecialchars($_POST['first_name']);
    $lastName = htmlspecialchars($_POST['last_name']);
    $department = htmlspecialchars($_POST['department']);
    $gender = htmlspecialchars($_POST['gender']);
    $others = htmlspecialchars($_POST['others']);

    $hobbies = isset($_POST['hobbies']) ? $_POST['hobbies'] : [];

    echo "<h2>Registration Successful</h2>";
    echo "<p><strong>First Name:</strong> $firstName</p>";
    echo "<p><strong>Last Name:</strong> $lastName</p>";
    echo "<p><strong>Department:</strong> $department</p>";
    echo "<p><strong>Gender:</strong> $gender</p>";
    echo "<p><strong>Hobbies:</strong> " . implode(", ", $hobbies) . "</p>";
    echo "<p><strong>Others:</strong> $others</p>";
}
?>
