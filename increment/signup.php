<?php
    include "connect.php";
    session_start();

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
    
    // Handle registration form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
        $fname = sanitizeInput($_POST['fname']);
        $lname = sanitizeInput($_POST['lname']);
        $address = filter_var($_POST['address'], FILTER_SANITIZE_EMAIL);
        $password = sanitizeInput($_POST['password']);
        $phone = sanitizeInput($_POST['phone']);
    
        // Hash the password
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    
        $stmt = $conn->prepare("INSERT INTO registration (registration_fname, registration_lname, registration_address, registration_password, registration_phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $fname, $lname, $address, $hashed_password, $phone);
    
        if ($stmt->execute()) {
            echo "<script>alert('Registration Successful');</script>";
        } else {
            echo "Error: " . $stmt->error;
        }
    
        $stmt->close();
    }
    
    // Handle login form submission
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login-submit'])) {
        $login_email = filter_var($_POST['login-email'], FILTER_SANITIZE_EMAIL);
        $login_password = sanitizeInput($_POST['login-password']);
    
        if (!empty($login_email) && !empty($login_password)) {
            if (verifyLogin($conn, $login_email, $login_password)) {
                $_SESSION['email'] = $login_email; // Store email in session
                header("Location: frontpage.php"); // Redirect to dashboard page after successful login
                exit();
            } else {
                echo "<script>alert('Login failed. Please check your credentials.');</script>";
            }
        } else {
            echo "<script>alert('Please provide both email and password.');</script>";
        }
    }
    
    $conn->close();

?>

<!DOCTYPE html>
<html>
<head>
    <title> SignUp and Login</title>
    <link rel="stylesheet"  href="../increment/style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="" method="post">
                <h1 style="padding-top: 15px; color: #5E18EA"> Create Account</h1>
                <input type="text" name="fname" placeholder="First Name" value="">
                <input type="text" name="lname" placeholder="Last Name" value="">
                <input type="text" name="address" placeholder="Email Address" value="">
                <input type="password" name="password" placeholder="Password" value="">
                <input type="text" name="phone" placeholder="Phone Number" value="">
                <button type="submit" name="submit" style="margin-top:10px"> Create Account</button>
                <h5>Already have an account! <a class="ghost" id="signIn" style="color:#5E18EA;"><u>Sign In</u></a></h5>
                <?php
                    if ($_SERVER["REQUEST_METHOD"] == "POST") {

                        $fname = $_POST['fname'];
                        $lname = $_POST['lname'];
                        $address = $_POST['address'];
                        $password = $_POST['password'];
                        $phone = $_POST['phone'];

                        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

                        $stmt = $conn->prepare("INSERT INTO registration (registration_fname, registration_lname, registration_address, registration_password, registration_phone) VALUES (?, ?, ?, ?, ?)");

                        $stmt->bind_param("sssss", $fname, $lname, $address, $hashed_password, $phone);

                        $execval = $stmt->execute();

                        if ($execval) {
                           echo "Gwapo ko" ;
                        } else {
                            echo "Error: " . $stmt->error;
                        }

                        $stmt->close();
                        $conn->close();
                    }
                ?>

            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="" method="post">
                <h1 style="padding-bottom: 15px; color: #5E18EA"> Login Now</h1>
                <input type="email" name="login-email" placeholder="Email">
                <input type="password" name="login-password" placeholder="Password">
                <a href="#" style="padding-left:150px; font-weight: bold"> Forgot Your Password?</a>
                <button type="submit" name="login-submit" style="margin-top: 10px">Sign In</button>
                <h5>New here? <a class="ghost" id="signUp" style="color:#5E18EA;"><u>Sign Up</u></a></h5>
            </form>
            
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <img src="./img/increment.jpg" height="400" width="450"/> 
                </div>
                <div class="overlay-panel overlay-right">
                    <img src="./img/increment.jpg" height="400" width="450"/>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">
    const signUpButton = document.getElementById('signUp');
    const signInButton = document.getElementById('signIn');
    const container = document.getElementById('container');

    signUpButton.addEventListener('click', () => {
        container.classList.add("right-panel-active");
    });
    signInButton.addEventListener('click', () => {
        container.classList.remove("right-panel-active");
    });
</script>
</body>
</html>