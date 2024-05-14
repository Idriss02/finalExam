<!-- login.php -->
<?php include 'view/header.php'; ?>
    <h2>Login</h2>
    <form action="index.php?action=login" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <input type="submit" value="Login">
    </form>
<?php include 'view/footer.php'; ?>
