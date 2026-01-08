<?php
include 'db.php';

$regno = $_POST['regno'];
$password = $_POST['password'];

// Check login
$checkQuery = "SELECT * FROM students WHERE regno='$regno' AND password='$password'";
$result = mysqli_query($conn, $checkQuery);

if (mysqli_num_rows($result) > 0) {
    $status = "SUCCESS";
    echo "✅ Login Successful";
} else {
    $status = "FAILED";
    echo "❌ Invalid Credentials";
}

// Store EVERY login attempt
$logQuery = "INSERT INTO login_logs (regno, password_entered, login_status)
             VALUES ('$regno', '$password', '$status')";
mysqli_query($conn, $logQuery);

mysqli_close($conn);
?>