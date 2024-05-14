<?php require_once 'WorkoutController.php'; ?>
<?php include 'header.php'; ?>
<link rel="stylesheet" href="styles.css">
<h2>Dashboard</h2>

<div class="calendar">
    <table>
        <thead>
            <tr>
                <th>Sunday</th>
                <th>Monday</th>
                <th>Tuesday</th>
                <th>Wednesday</th>
                <th>Thursday</th>
                <th>Friday</th>
                <th>Saturday</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <!-- Dummy data for demonstration -->
                <td></td>
                <td><a href="#" class="workout-link" data-exercise="Bench Press">Bench Press</a></td>
                <td></td>
                <td><a href="#" class="workout-link" data-exercise="Cable Rows">Cable Rows</a></td>
                <td></td>
                <td><a href="#" class="workout-link" data-exercise="Squats">Squats</a></td>
                <td></td>
            </tr>
            <!-- Add more rows as needed -->
        </tbody>
    </table>
</div>

<div class="workout-details">
    <h3>Workout Details</h3>
    <div id="exercise-details"></div>
</div>

<?php include 'footer.php'; ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Add event listeners to workout links
        const workoutLinks = document.querySelectorAll('.workout-link');
        workoutLinks.forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
                const exercise = this.dataset.exercise;
                // Display exercise details
                document.getElementById('exercise-details').innerHTML = `
                    <h4>${exercise}</h4>
                    <p>Description: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <img src="images/exercise_${exercise.toLowerCase()}.jpg" alt="${exercise}">
                `;
            });
        });
    });
</script>
