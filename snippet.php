<?php
session_start();

// Sample credentials 
$valid_user = "admin";  // username
$valid_pass = "password123";  //  passwrod

// Checking if the form is submitted using POST method
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // getting the form input data 
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Validating teh credentials
    if ($username == $valid_user && $password == $valid_pass) {
        // If the credentials are valid
        $_SESSION["logged_in"] = true;

        // Redirect the user to the welcome page
        header("Location: welcome.php");  // welcome.php is the page shown after a successful login
        exit;  
    } else {
        // If the credentials are invalid, an error message will be displayed
        $error = "Invalid username or password!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>

    <!-- Displaying error message if teh login fails -->
    <?php if (isset($error)) { 
        // Displaying the error message in red
        echo "<p style='color: red;'>$error</p>"; 
    } ?>

    <!-- Form to collect the username and password -->
    <form method="post">
        <!-- Username input field -->
        <label for="username">Username:</label><br>
        <input type="text" id="username" name="username" required><br><br>
        
        <!-- Password input field -->
        <label for="password">Password:</label><br>
        <input type="password" id="password" name="password" required> <br><br>
 
        <!-- Submit button to send the form data -->
        <button type="submit">Login</button>
    </form>
</body>
</html>