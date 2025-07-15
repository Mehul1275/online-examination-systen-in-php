<?php
session_start();
include_once 'dbConnection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];

    // Validate email
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Check if email exists in the database
        $result = mysqli_query($con, "SELECT * FROM user WHERE email = '$email'");
        if (mysqli_num_rows($result) > 0) {
            // Generate a new password or reset link
            $newPassword = bin2hex(random_bytes(6)); // Generate a random password
            $hashedPassword = md5($newPassword); // Hash the new password

            // Update the password in the database
            mysqli_query($con, "UPDATE user SET password = '$hashedPassword' WHERE email = '$email'");

            // Send the new password to the user's email
            mail($email, "Password Reset", "Your new password is: $newPassword");

            echo "<script>alert('A new password has been sent to your email.'); window.location.href = 'index.php';</script>";
        } else {
            echo "<script>alert('Email not found.'); window.location.href = 'index.php';</script>";
        }
    } else {
        echo "<script>alert('Invalid email format.'); window.location.href = 'index.php';</script>";
    }
}
?>
