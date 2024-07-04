<?php
// Function to sanitize input data
function sanitizeInput($input) {
    // Remove leading and trailing whitespace
    $input = trim($input);
    // Remove backslashes
    $input = stripslashes($input);
    // Convert special characters to HTML entities
    $input = htmlspecialchars($input);
    return $input;
}

// Function to verify login credentials
function verifyLogin($conn, $login_email, $login_password) {
    // Sanitize inputs
    $login_email = sanitizeInput($login_email);

    $stmt = $conn->prepare("SELECT registration_password FROM registration WHERE registration_address = ?");
    $stmt->bind_param("s", $login_email);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($login_password, $hashed_password)) {
        return true; // Passwords match
    } else {
        return false; // Passwords do not match
    }
}

// Handle login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $login_email = filter_input(INPUT_POST, 'login-email', FILTER_SANITIZE_EMAIL);
    $login_password = filter_input(INPUT_POST, 'login-password', FILTER_SANITIZE_STRING);

    if (!empty($login_email) && !empty($login_password)) {
        if (verifyLogin($conn, $login_email, $login_password)) {
            // Start session and redirect to dashboard or home page
            session_start();
            $_SESSION['email'] = $login_email; // Store email in session
            header("Location: index2.php"); // Redirect to dashboard page after successful login
            exit();
        } else {
            echo "<script>alert('Login failed. Please check your credentials.');</script>";
        }
    } else {
        echo "<script>alert('Please provide both email and password.');</script>";
    }
}

?>