<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="style_dashboard.css">
    <title>Transactions</title>
</head>
<body>
    <div class="app-container">
        <div class="sideNavBar">
            <div class="increment">
                <span class="light">incre</span><span class="bold">ment</span>
            </div>
            <div class="balance">
                <p>XXX Bank | XX000X000</p>
                <p class="amount">₱ 20,000.00</p>
                <p>Current Balance</p>
            </div>
            <div class="nav-links">
                <a href="#" class="active"><i class="fa-solid fa-house"></i> Dashboard</a>
                <a href="#"><i class="fa-solid fa-chart-line"></i> Insight</a>
                <a href="#"><i class="fa-solid fa-exchange-alt"></i> Transaction</a>
                <a href="account.php"><i class="fa-solid fa-user"></i> Account</a>
                <a href="#"><i class="fa-solid fa-cog"></i> Settings</a>
            </div>
            <div class="footer-links">
                <hr class="footer-divider">
                <a href="#"><i class="fa-solid fa-plus"></i> Add Account</a>
                <a href="#"><i class="fa-solid fa-exchange-alt"></i> Switch Account</a>
                <a href="logout.php"><i class="fa-solid fa-sign-out-alt"></i> Log Out</a>
            </div>
        </div>
        <div class="main-content">
            <div class="dashboard">
           
                <h2>Dashboard</h2>
                <form id="search" action="search">
                    <input type="search"  name="q" id="query" 
                    placeholder="Search Here..."
                    aria-label="Search through site content">
                </form>
                
                <div class="centerelements">
                <section>
                    <div class="saved-chart">
                        <div class="header">
                            <h3>My Saved Chart</h3>
                            <div class="arrow-icon">
                                &rsaquo;
                            </div>
                        </div>
                        <div class="task">
                            <div class="task-icon special"></div>
                            <div class="task-details">
                                <span class="task-title">Special Task 1</span>
                                <span class="task-meta">1 Month Ago, 1 Region, 1 Company</span>
                            </div>
                            <div class="task-status down">40%</div>
                        </div>
                        <div class="task">
                            <div class="task-icon headset"></div>
                            <div class="task-details">
                                <span class="task-title">Task A</span>
                                <span class="task-meta">1 Month Ago, 1 Region, 1 Company</span>
                            </div>
                            <div class="task-status up">70%</div>
                        </div>
                        <div class="task">
                            <div class="task-icon document"></div>
                            <div class="task-details">
                                <span class="task-title">Task B</span>
                                <span class="task-meta">1 Month Ago, 1 Region, 1 Company</span>
                            </div>
                            <div class="task-status up">90%</div>
                        </div>
                    </div>
                </section>
                            <section>
                                <div class="progress-board">
                                    <div class="header">
                                        <h3>Progress Board</h3>
                                        <div class="settings-icon">
                                            &#9881;
                                        </div>
                                    </div>
                                    <div class="task">
                                        <div class="task-icon"></div>
                                        <div class="task-details">
                                            <span class="task-title">Task A</span>
                                            <span class="task-amount">+ $200.00</span>
                                        </div>
                                        <div class="task-status">On Progress</div>
                                    </div>
                                    <div class="task">
                                        <div class="task-icon"></div>
                                        <div class="task-details">
                                            <span class="task-title">Task B</span>
                                            <span class="task-amount">+ $200.00</span>
                                        </div>
                                        <div class="task-status">On Progress</div>
                                    </div>
                                    </div>
                                </section>
                    <section>        
                        <div class="transaction-board">
                            <div class="transaction-details">
                                <h3>Transaction</h3>
                                <div class="transaction-item">
                                    <span class="payment-type">Payment</span>
                                    <div class="space"></div>
                                    <span class="payment-amount">- $1,900</span>
                                </div>
                                <div class="transaction-item2">
                                    <span class="payment-method">Transfer</span>
                                    <div class="space"></div>
                                    <span class="payment-status">Success</span>
                                </div>
                                <div class="transaction-item">
                                    <span class="payment-type">Payment</span>
                                    <div class="space"></div>
                                    <span class="payment-amount">- $1,900</span>
                                </div>
                                <div class="transaction-item2">
                                    <span class="payment-method">Transfer</span>
                                    <div class="space"></div>
                                    <span class="payment-status">Success</span>
                                </div>
                                <div class="transaction-item">
                                    <span class="payment-type">Payment</span>
                                    <div class="space"></div>
                                    <span class="payment-amount">- $1,900</span>
                                </div>
                                <div class="transaction-item2">
                                    <span class="payment-method">Transfer</span>
                                    <div class="space"></div>
                                    <span class="payment-status">Success</span>
                                </div>
                            </div>
                            <div class="card-details">
                                <div class="card">
                                    <h4>Debit</h4>
                                    <p>xxx-xxx-0000</p>
                                    <h2>₱ 20,000.00</h2>
                                    <p>Expired Date: March 4th, 2029</p>
                                    <p>Juan Karlos</p>
                                    <p>Master Card</p>
                                </div>
                            </div>
                        </div>
                </section>
                <section>
                    <div class="chat-log">
                        <div class="header">
                            <h3>Chat Log</h3>
                            <div class="arrow-icon">
                                &rsaquo;
                            </div>
                        </div>
                        <div class="chat-list">
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Mickah</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Charlot</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Damon</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Alfredo</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Claudia</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Cahaya</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Dana</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Ally</span>
                            </div>
                            <div class="chat-item">
                                <div class="chat-icon"></div>
                                <span>Ken</span>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
            </div>
    </div>
</body>
</html>