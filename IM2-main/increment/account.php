<?php
session_start(); // Start session

$host = "localhost";
$user = "root";
$password = "";
$con_db = "increment_db";

include "connect.php"; // Assuming this file contains necessary database connection code

$data = mysqli_connect($host, $user, $password, $con_db);

// Check connection
if (!$data) {
    die("Connection failed: " . mysqli_connect_error());
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_acc.css">
    <title>Increment Technologies</title>
</head>
<body>
    <div id="left" class="splitleft">
        <div id="increment">
            <h1 class="incre">incre</h1>
            <h1 class="ment">ment</h1>
        </div>
        <div id="bank">
            <p>XXX Bank | XX000X000</p>
            <p>₱ 20,000.00</p>
            <p>Current Balance</p>
        </div>

        <div id="up">
            <div id="attributes">
                <div class="container">
                    <div class="attributes">
                        <img src="img/dashboard.png" alt="dashboard">
                    </div>
                    <div class="text">
                        <p><a href="#">Dashboard</a></p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="attributes">
                    <img src="img/insights.png" alt="insights">
                </div>
                <div class="text">
                    <p><a href="#">Insight</a></p>
                </div>
            </div>

            <div class="container">
                <div class="attributes">
                    <img src="img/transactions.png" alt="transaction">
                </div>
                <div class="text">
                    <p><a href="#">Transaction</a></p>
                </div>
            </div>

            <div class="container">
                <div class="attributes">
                    <img src="img/account.png" alt="account">
                </div>
                <div class="text">
                    <p><a href="#">Account</a></p>
                </div>
            </div>

            <div class="container">
                <div class="attributes">
                    <img src="img/settings.png" alt="settings">
                </div>
                <div class="text">
                    <p><a href="#">Settings</a></p>
                </div>
            </div>
        </div>
        <hr class="solid">
        
        <div id="attributes2">
            <div class="container">
                <div class="attributes">
                    <img src="img/add user.png" alt="add account">
                </div>
                <div class="text">
                    <p><a href="#">Add Account</a></p>
                </div>
            </div>

            <div class="container">
                <div class="attributes">
                    <img src="img/switch.png" alt="switch account">
                </div>
                <div class="text">
                    <p><a href="#">Switch Account</a></p>
                </div>
            </div>

            <div class="container">
                <div class="attributes">
                    <img src="img/logout.png" alt="logout">
                </div>
                <div class="text">
                  <p><a href="signup.php" >Logout</a></p>
                </div>

            </div>
        </div>
    </div>

    <div id="right" class="splitright">
        <div class="c2"></div>
        <div class="border">
            <div class="line"></div>
            <?php
            // Check if user is logged in
            if (isset($_SESSION['id'])) {
                // Retrieve logged-in user's ID from session
                $id = $_SESSION['id'];

                // Query data for the logged-in user using prepared statement
                $sql = "SELECT * FROM registration WHERE id = ?";
                
                // Prepare the SQL statement
                $stmt = mysqli_prepare($data, $sql);
                
                if ($stmt) {
                    // Bind parameters
                    mysqli_stmt_bind_param($stmt, "s", $id);
                    
                    // Execute query
                    mysqli_stmt_execute($stmt);
                    
                    // Get result set
                    $result = mysqli_stmt_get_result($stmt);

                    // Check if query was successful
                    if ($result && mysqli_num_rows($result) > 0) {
                        // Fetch associative array of the user's data
                        $user_data = mysqli_fetch_assoc($result);
                        // Use $user_data to access the user's information
                        $fname = $user_data['registration_fname'];
                        $lname = $user_data['registration_lname'];
                        $phone = $user_data['registration_phone'];

                        // Display user details
                        echo "<p>First Name: {$fname}</p>";
                        echo "<p>Last Name: {$lname}</p>";
                        echo "<p>ID: {$id}</p>";
                        echo "<p>Phone: {$phone}</p>";
                    } else {
                        echo "User data not found";
                    }

                    // Close result set
                    mysqli_stmt_close($stmt);
                } else {
                    echo "Error in prepared statement: " . mysqli_error($data);
                }
            } else {
                echo "User is not logged in"; // Handle case where user is not logged in
            }

            // Close database connection
            mysqli_close($data);
            ?>
        </div>
    </div>

</body>
</html>
