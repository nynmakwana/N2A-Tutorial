<?php
//include auth_session.php file on all user panel pages
include("ln_user.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>
    
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['fname,lname']; ?>!</p>
        <p>You are now user dashboard page.</p>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>