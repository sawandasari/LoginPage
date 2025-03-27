<?php

session_start();

// Checking if the user is logged in, if not redirect to the login page
if (!isset($_SESSION["logged_in"]) || $_SESSION["logged_in"] !== true) {
    header("Location: login.php"); // redirectign to login page if not logged in
    exit;
}

// Checking if logout button was clicked
if (isset($_POST['logout'])) {
    // Destroying the session to log out teh user
    session_destroy();
    header("Location: snippet.php"); // redirecting to login page after logout
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
</head>
<body>
    <h2>Hi, I am Sawan Dasari</h2>

    <!-- Logout form -->
    <form method="post">
        <button type="submit" name="logout">Logout</button>
    </form>
</body>
</html>
