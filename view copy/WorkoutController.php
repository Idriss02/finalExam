<?php
class WorkoutController {
    public static function dashboard() {
        // Implement logic to fetch user's workout schedule
        // Dummy data for demonstration
        $workouts = array(
            "Workout 1" => "Monday",
            "Workout 2" => "Wednesday",
            "Workout 3" => "Friday"
        );
        // Display the dashboard view
        include 'view/dashboard.php';
    }

    public static function addWorkout() {
        // Check if the form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Process the form data (add workout to schedule)
            // Dummy logic for demonstration
            // Redirect to dashboard
            header('Location: index.php?action=dashboard');
            exit();
        }
        // Include add workout form view
        include 'view/add_workout.php';
    }
}
?>
