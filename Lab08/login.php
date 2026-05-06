<?php include 'header.inc'; ?>

<h2>Login</h2>
<form method="post" action="process.php">
    <label for="username">Username:</label>
    <input type="text" name="username" id="username" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <input type="hidden" name="token" value="J12345678">

    <input type="submit" value="Login">
</form>

<?php 
// Check if process.php sent us back with an error message
if (isset($_GET['error'])) {
    echo "<p style='color:red;'>Invalid Username or Password!</p>";
}
?>

<?php include 'footer.inc'; ?>