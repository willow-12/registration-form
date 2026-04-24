<?php
session_start();
?>

<h2>Registration Successful 🎉</h2>

<p>Welcome <?php echo $_SESSION['first_name']; ?> 👋</p>

<p>First Name: <?php echo $_SESSION['first_name']; ?></p>
<p>Last Name: <?php echo $_SESSION['last_name']; ?></p>
<p>Department: <?php echo $_SESSION['department']; ?></p>
<p>Gender: <?php echo $_SESSION['gender']; ?></p>
<p>Hobbies: <?php echo $_SESSION['hobbies']; ?></p>
<p>Others: <?php echo $_SESSION['others']; ?></p>
