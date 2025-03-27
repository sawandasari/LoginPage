# LoginPaSimple PHP Login System

Overview

This project is a basic login system implemented using PHP. It allows users to log in with predefined credentials and access a welcome page. The session management ensures that only authenticated users can view the welcome page. Additionally, users can log out, which destroys the session and redirects them back to the login page.

Features

Secure session-based authentication

Basic form validation

Redirection for unauthorized access

Logout functionality

Files Included

snippet.php - Login page where users enter their credentials

welcome.php - Restricted page accessed after successful login

How It Works

The user enters their username and password on the snippet.php page.

If the credentials match the predefined ones (admin/password123), a session is created, and the user is redirected to welcome.php.

If incorrect credentials are entered, an error message is displayed.

On welcome.php, the user's session is validated before displaying content.

The logout button destroys the session and redirects the user back to the login page.