<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Result</title>
</head>
<body>

<h2>Registration Successful 🎉</h2>

<p>First Name: <?php echo $_SESSION['first_name']; ?></p>
<p>Last Name: <?php echo $_SESSION['last_name']; ?></p>
<p>Department: <?php echo $_SESSION['department']; ?></p>
<p>Gender: <?php echo $_SESSION['gender']; ?></p>
<p>Hobbies: <?php echo implode(", ", $_SESSION['hobbies']); ?></p>
<p>Others: <?php echo $_SESSION['others']; ?></p>

</body>
</html>
