<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Form</title>
    <script src="https://kit.fontawesome.com/04037a9a50.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container signup">
        <form>
            <div class="reg-form">
                <div class="reg-title">
                    <i class="fa-solid fa-user-plus"></i>
                    <h4>Register</h4>
                </div>
                <div class="inp-box">
                    <div class="log-inp">
                        <label>Username</label>
                        <div class="main-inp">
                            <input type="text" placeholder="Enter your username" required>
                            <i class="fa-regular fa-user"></i>
                        </div>
                    <div class="log-inp">
                        <label>Email</label>
                        <div class="main-inp">
                            <input type="email" placeholder="Enter your Email" required>
                            <i class="fa-solid fa-envelope"></i>
                        </div>                       
                    </div>

                    <div class="log-inp">
                        <label >Password</label>
                        <div class="main-inp">
                            <input type="password" placeholder="Enter your Password" required>
                            <i class="fa-solid fa-lock"></i>
                        </div>

                    <div class="log-inp">
                        <label> Confirm Password</label>
                        <div class="main-inp">
                            <input type="password" placeholder="Confirm Password" required>
                            <i class="fa-solid fa-lock"></i>
                        </div>
                        
                    </div>
                </div>

            </div>
            <div class="checkbox">
                <div class="terms">
                    <input type="checkbox">
                    <span>I read and agree to <a href="#">Terms & Conditions</a></span>
                </div>
             </div>
             <div class="reg-btn">
                <input type="submit" value="Create Account">
            </div>
            <div class="sing-up">
                <span>Already Have an account? <a href="./index.php">Sign in</a></span>
            </div>

        </form>

    </div>
    
</body>
</html>