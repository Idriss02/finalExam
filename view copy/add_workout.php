<?php require_once 'WorkoutController.php'; ?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles.css">
<h2>Add Workout</h2>
<form action="index.php?action=add_workout" method="post">
    <div>
        <label for="workout_name">Workout Name:</label>
        <input type="text" id="workout_name" name="workout_name" required>
    </div>
    <div>
        <label for="day">Day:</label>
        <input type="text" id="day" name="day" required>
    </div>
    <div>
        <label for="time">Time:</label>
        <input type="text" id="time" name="time" required>
    </div>
    <div>
        <label for="duration">Duration:</label>
        <input type="text" id="duration" name="duration" required>
    </div>
    <!-- Add more input fields as needed -->
    <button type="submit">Add Workout</button>
</form>
<?php include 'footer.php'; ?>

