<!DOCTYPE html>
<html>
<head>
    <title> SignUp and Login</title>
    <link rel="stylesheet"  href="style1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="">
                <h1 style="padding-top: 15px; color: #5E18EA"> Create Account</h1>
                <input type="text" name="fname" placeholder="First Name">
                <input type="text" name="lname" placeholder="Last Name">
                <input type="text" name="address" placeholder="Email Address">
                <input type="password" name="password" placeholder="Password">
                <input type="text" name="phone" placeholder="Phone Number">
                <button style="margin-top:10px"> Create Account</button>
                <h5>Already have an account! <a class="ghost" id="signIn" style="color:#5E18EA;"><u>Sign In</u></a></h5>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#">
                <h1 style="padding-bottom: 15px; color: #5E18EA"> Login Now</h1>
                <input type="email" name="email" placeholder="Email">
                <input type="password" name="password" placeholder="Password">
                <a href="#" style="padding-left:150px; font-weight: bold"> Forgot Your Password?</a>
                <button style="margin-top: 10px">Sign In</button>
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