<?php include "../config.php"; ?> 
<?php include "../functions.php"; ?>
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
    <?php 
          $msg = "";
          $err = "";
          if (isset($_POST['regbtn'])) {
            $joindate = date('Y-m-d H:i:s');

            $username = $_POST['uname'];
            $password = md5($_POST['upass']);
            $cpassword = md5($_POST['cupass']);
            $status = 'active';

            if ($password == $cpassword) {
                $sql = "INSERT INTO ".USERTBL."(user_join_date, username, password, user_status) VALUES ('$joindate','$username','$password','$status')";
                if($con->query($sql)==true){
                    $msg = "User Registration Successfull";
                }else{
                  $err = 'Registration Faild: '.$con->error;
                }
            }else{
                $err = "Password is not match";
            }

            
          }

        ?>
    <div class="container signup">
        <form method="post">
            <div class="reg-form">
                <div class="reg-title">
                    <i class="fa-solid fa-user-plus"></i>
                    <h4>Register</h4>

                     <?php if (!empty($msg)) { ?>
                      <div class="alert alert-success"><?php echo $msg; ?></div>
                      <?php } ?>
                      <?php if (!empty($err)) { ?>
                      <div class="alert alert-danger"><?php echo $err; ?></div>
                      <?php } ?>
                </div>
                <div class="inp-box">
                    <div class="log-inp">
                        <label>Username</label>
                        <div class="main-inp">
                            <input type="text" name="uname" placeholder="Enter your username" required>
                            <i class="fa-regular fa-user"></i>
                        </div>

                    <div class="log-inp">
                        <label >Password</label>
                        <div class="main-inp">
                            <input type="password" name="upass" placeholder="Enter your Password" required>
                            <i class="fa-solid fa-lock"></i>
                        </div>

                    <div class="log-inp">
                        <label> Confirm Password</label>
                        <div class="main-inp">
                            <input type="password" name="cupass" placeholder="Confirm Password" required>
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
                <input type="submit" name="regbtn" value="Create Account">
            </div>
            <div class="sing-up">
                <span>Already Have an account? <a href="./index.php">Sign in</a></span>
            </div>

        </form>

    </div>
    
</body>
</html>