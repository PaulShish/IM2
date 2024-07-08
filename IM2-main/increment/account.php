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
                        <p><a href="dashboard.php">Dashboard</a></p>
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
                  <p><a href="logout.php">Logout</a></p>
                </div>

            </div>
        </div>
    </div>

    <div id="right" class="splitright">
        <div class="border">
        <h1 style="margin-left: 150px; margin-top: 50px">Welcome, <?php echo $user['fname'] . ' ' . $user['lname']; ?></h1>
        <hr class="custom-line">
            <h3 style="color: #9D73F1ed; margin-left: 100px; margin-top: 50px">First name: <?php echo $user['fname']; ?></h3>
            <h3 style="color: #9D73F1ed; margin-left: 100px; margin-top: 20px">Last name: <?php echo $user['lname']; ?></h3>
            <h3 style="color: #9D73F1ed; margin-left: 100px; margin-top: 20px">Email: <?php echo $user['email']; ?></h3>
            <h3 style="color: #9D73F1ed; margin-left: 100px; margin-top: 20px">Contact number: <?php echo $user['phone']; ?></h3>
            <h1 style="margin-left: 150px; margin-top: 50px">Team Agile</h1>
            <h3 style="color: #9D73F1ed; margin-left: 100px; margin-top: 20px">Supervisor: </h3>
            <h3 style="color: #9D73F1ed; margin-left: 100px; margin-top: 20px">Members: </h3>
        </div>
    </div>

</body>
</html>