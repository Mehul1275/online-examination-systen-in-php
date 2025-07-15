<?php
// Simulate a POST request to reset_password.php
$_POST['email'] = 'test@example.com'; // Replace with a valid email for testing
$_SERVER['REQUEST_METHOD'] = 'POST';

// Include the reset_password.php file to execute the logic
include 'reset_password.php';
?>
