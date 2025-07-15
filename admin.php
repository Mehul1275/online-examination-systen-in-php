<?php
include_once 'dbConnection.php';
$ref = @$_GET['q'];
$email = trim($_POST['uname']);
$password = trim($_POST['password']);

$email = stripslashes($email);
$email = addslashes($email);
$password = stripslashes($password);
$password = addslashes($password);

// Use Prepared Statement to Prevent SQL Injection
$stmt = $con->prepare("SELECT password FROM admin WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

if ($row) {
    $stored_password = $row['password']; // Fetch stored password

    if ($password === $stored_password) { // Match password
        session_start();
        if (isset($_SESSION['email'])) {
            session_unset();
        }
        $_SESSION["name"] = 'Admin';
        $_SESSION["key"] = 'sunny7785068889';
        $_SESSION["email"] = $email;

        echo "<script>window.location.href = 'dash.php?q=0';</script>";
    } else {
        echo "<script>alert('Warning: Access Denied. Incorrect Email or Password'); window.location.href = 'index.php';</script>";
    }
} else {
    echo "<script>alert('Warning: Access Denied. Incorrect Email or Password'); window.location.href = 'index.php';</script>";
}

$stmt->close();
$con->close();
?>
