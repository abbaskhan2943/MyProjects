<?php
session_start();

include "connect.php";

if(isset($_POST['submit'])){
    if(isset($_GET['token'])){
    $token = $_GET['token'];
     
    $newpassword= mysqli_real_escape_string($connect,$_POST['password']);
    $re_password = mysqli_real_escape_string($connect,$_POST ['re-password']);
    
    //password encryption
    $passcode = password_hash ($newpassword, PASSWORD_BCRYPT);
    $re_passcode = password_hash($re_password, PASSWORD_BCRYPT);
        
    if ($newpassword === $re_password){

        $updatequery = "UPDATE users SET Password = '$passcode' where token = '$token' ";
        $iquery = mysqli_query($connect, $updatequery);
        
        if($iquery){
            $_SESSION['msg'] = "Password Updated Successfully";
            header('location: signin.php'); 
        }
        else{
            $_SESSION['msg'] = "Password Update didn't success";
            header('location: Reset_Password.php');
            
        }
            
    }else{
        $_SESSION['PassError'] = "Passwords didn't match";
    }
    
}
else{
    echo "Token not found ";
}
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="Media/logo10.PNG" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/reset_password.css" />
    <title>Reset Password</title>
</head>

<body>
    <div class="Upper-top"></div>
    <!-- code for Main body  -->
    <div class="container">
        <!-- header having image means logo and welcome heading -->
        <header class="header">
            <img src="Media/LOGO-01.png" alt="logo of company" />
            <!-- heading container having h1 and h3 -->
            <div class="heading">
                <h2>Welcome Back to Easy Farming</h2>

                <h3>Online Machinary Hiring App</h3>
            </div>
        </header>
        <div class="forget_password">
            <div class="title">
                <h2>Reset your password</h2>
            </div>
            <hr />
            <p style="background-color: #b34045; color: white; width: 70%; margin:auto; text-align:center;">
                <?php 
                        if(isset($_SESSION['PassError'])){

                            echo $_SESSION['PassError']; 
                        }else{
                            echo $_SESSION['PassError'] = " ";
                        }
                            ?>
            </p>

            <form action="" method="POST">
                <div class="sign_up" style="text-align: center">
                    <label for="password"><b>New Password</b></label> <br />
                    <input type="password" placeholder="Enter new password" name="password" required />
                    <br />
                    <br />
                    <label for="password"><b>Confirm&nbsp;Password</b></label> <br />
                    <input type="password" class="icpassword" placeholder="Re-Enter password" name="re-password"
                        required />
                    <br />
                    <br />
                    <button type="submit" name="submit" id="btn">Update Password</button>
                    <br />
                    <br />
                </div>
            </form>
        </div>
        <!-- footer container -->
        <div class="footer">
            <p>All Rights reserved Easyforming &copy; 2022</p>
        </div>
    </div>
</body>

</html>