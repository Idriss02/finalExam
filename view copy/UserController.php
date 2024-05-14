<?php
class UserController {
    public static function login() {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Retrieve username and password from the form
            $username = $_POST["username"];
            $password = $_POST["password"];

            // Validate username and password (You can add more validation logic here)
            if ($username === "admin" && $password === "123456") {
                // Set session variables upon successful login
                $_SESSION["username"] = $username;
                $_SESSION["logged_in"] = true;
                // Redirect to dashboard
                header('Location: index.php?action=dashboard');
                exit();
            } else {
                // Display error message for invalid credentials
                echo "<p>Invalid username or password.</p>";
            }
        }
        // Include login form view
        include 'view/login.php';
    }

    public static function logout() {
        // Destroy session and redirect to login page
        session_destroy();
        header('Location: index.php?action=login');
        exit();
    }
}
?>
