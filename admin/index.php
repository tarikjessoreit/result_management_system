<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <script src="https://kit.fontawesome.com/04037a9a50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container login">
            <form action="dashboard.php">
                <div class="login-form">
                    <div class="log-title">
                        <i class="fa-solid fa-user"></i>
                        <h4>Login</h4>
                    </div>

                    <div class="inp-box">
                        <div class="log-inp">
                            <label>Username</label>
                            <div class="main-inp">
                                <input type="text" placeholder="Enter your username" required>
                                <i class="fa-solid fa-envelope"></i>
                            </div>
                            
                        </div>
    
                        <div class="log-inp">
                            <label >Password</label>
                            <div class="main-inp">
                                <input type="password" placeholder="Enter your Password" required>
                                <i class="fa-solid fa-lock"></i>
                            </div>
                            
                        </div>
                    </div>
                    <div class="checkbox">
                        <div class="rem-alrt">
                            <input type="checkbox">
                            <span>Remember Me</span>
                        </div>
                        <div class="forg-pass">
                            <a href="#">Forgot Password?</a>
                        </div>                      
                    </div>
                    <div class="log-btn">
                        <input type="submit" value="Login">
                    </div>
                    <div class="social-icon">
                        <div class="social-title">
                            <strong>Or login</strong>                        
                        </div>
                        <div class="icon">
                            <i class="fa-brands fa-facebook-f"></i>
                            <i class="fa-brands fa-google"></i>
                            <i class="fa-brands fa-twitter"></i>
                        </div>
                        <div class="sn-up">
                            <span>Don't have account? <a href="./reg-form.php">Sign Up</a></span>
                        </div>

    
                    </div>
                </div>               
            </form>       
    </div>

    
</body>
</html>