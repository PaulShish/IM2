<?php
function sanitizeInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

function verifyLogin($conn, $login_email, $login_password) {
    $login_email = sanitizeInput($login_email);

    $stmt = $conn->prepare("SELECT registration_password FROM registration WHERE registration_address = ?");
    $stmt->bind_param("s", $login_email);
    $stmt->execute();
    $stmt->bind_result($hashed_password);
    $stmt->fetch();

    if (password_verify($login_password, $hashed_password)) {
        return true; 
    } else {
        return false; 
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $login_email = filter_input(INPUT_POST, 'login-email', FILTER_SANITIZE_EMAIL);
    $login_password = filter_input(INPUT_POST, 'login-password', FILTER_SANITIZE_STRING);

    if (!empty($login_email) && !empty($login_password)) {
        if (verifyLogin($conn, $login_email, $login_password)) {
           
            session_start();
            $_SESSION['email'] = $login_email; 
            header("Location: index2.php"); 
            exit();
        } else {
            echo "<script>alert('Login failed. Please check your credentials.');</script>";
        }
    } else {
        echo "<script>alert('Please provide both email and password.');</script>";
    }
}

?>