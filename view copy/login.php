<?php 
require_once 'UserController.php';
 ?>
   <link rel="stylesheet" href="styles.css">
<?php include 'header.php'; ?>
<h2>Login</h2>
<form action="index.php?action=login" method="post">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username" required>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password" required>
    <button type="submit">Login</button>
</form>
<?php include 'footer.php'; ?>
