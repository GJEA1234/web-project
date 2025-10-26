<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Database connection
    $conn = mysqli_connect("localhost", "root", "", "collage_db");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Get email and password
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    // Check if email and password match
    $sql = "SELECT * FROM persons WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        // Login successful - store user data in session
        $_SESSION['user_email'] = $email;
        $_SESSION['loggedin'] = true;
        
        // Redirect to home page
        header("Location: home.php");
        exit();
    } else {
        // Login failed
        echo "<script>alert('Invalid Email or Password'); window.location.href='login.php';</script>";
        exit();
    }

    mysqli_close($conn);
} else {
    // If someone tries to access this page directly
    header("Location: login.php");
    exit();
}
?>