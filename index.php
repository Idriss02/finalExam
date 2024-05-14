<?php
session_start();
// Adjust the path to UserController.php relative to the index.php file
require_once 'view/UserController.php';
require_once 'view/WorkoutController.php';

// Check the action parameter to determine the requested action
$action = isset($_GET['action']) ? $_GET['action'] : 'login';

// Route requests to the appropriate controller method based on the action
switch ($action) {
    case 'login':
        UserController::login();
        break;
    case 'logout':
        UserController::logout();
        break;
    case 'dashboard':
        // Check if the user is logged in
        if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            // Redirect to login page if not logged in
            header('Location: index.php?action=login');
            exit();
        }
        WorkoutController::dashboard();
        break;
    case 'add_workout':
        // Check if the user is logged in
        if (!isset($_SESSION['logged_in']) || !$_SESSION['logged_in']) {
            // Redirect to login page if not logged in
            header('Location: index.php?action=login');
            exit();
        }
        WorkoutController::addWorkout();
        break;
    default:
        // Redirect to the login page if the action is not recognized
        UserController::login();
        break;
}
?>
