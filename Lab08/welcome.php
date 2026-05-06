<?php
session_start();
include 'header.inc';

// Check if the session variable 'user' exists
if (!isset($_SESSION['user'])) {
    // Not logged in? Boot them back to the login page
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome Page</h2>
<p>Hello, <strong><?php echo htmlspecialchars($_SESSION['user']); ?></strong>!</p>
<p>You have successfully logged in and your session is active.</p>

<p><a href="logout.php">Click here to Logout</a></p>

<?php include 'footer.inc'; ?>