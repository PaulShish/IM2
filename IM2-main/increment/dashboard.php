<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: signup.php");
    exit();
}

$user = $_SESSION['user'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style_all.css">
    <title>Transactions</title>
</head>
<body>
    <div class="app-container">
        <div class="sideNavBar">
        <div id="increment">
            <h1 class="incre">incre</h1>
            <h1 class="ment">ment</h1>
        </div>
            <div class="nav-links">
                <a href="dashboard.php" class="active"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="#"><i class="fa-solid fa-chart-line"></i> Messages</a>
                <a href="#"><i class="fa-solid fa-exchange-alt"></i> Tickets</a>
                <a href="account.php"><i class="fa-solid fa-user"></i> Account</a>
                <a href="#"><i class="fa-solid fa-cog"></i> Settings</a>
                <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Log Out</a>

                <div class="footer-links">
                <hr class="footer-divider">

                <h2><u><?php echo $user['fname'] . ' ' . $user['lname']; ?></u></h2>
                <p class="p">Employee</p>
                
                </div>
            </div>
        </div>
        <div class="main-content">
           
        </div>
    </div>
</body>
</html>