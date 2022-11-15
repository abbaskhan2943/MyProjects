<!-- PHP Starts down here  -->
<?php
session_start();
include "connect.php";

if(isset($_POST['submit'])){
    // fetch the data, stored in the name variable through Post method. 
   
    $email= mysqli_real_escape_string($connect,$_POST['email']);
    
    $mailquery = "select * from users where Email = '$email' ";
    $query = mysqli_query($connect, $mailquery);

    $mailcheck = mysqli_num_rows($query);
    if($mailcheck){
            $userdata = mysqli_fetch_array($query);
            $username = $userdata['First_Name'];
            $token = $userdata ['token'];

                $subject = "Password Reset Link";
                $body = "Hello, $username. Please click the link to reset your password http://localhost/EasyFarming_AdminPanel/Reset_Password.php?token=$token ";
                $Sender_email = "From: easyfarming1512@gmail.com";

                if (mail($email, $subject, $body, $Sender_email)) {
                    $_SESSION['msg'] = "Check your mail for token to reset your password $email";
                    header("location: signin.php");
                }
                else{
                    ?>
<script>
alert("Email sending failed...");
</script>
<?php           
                }
            } else{
                    ?>
<script>
alert("No such an email found. Please Retry...");
</script>
<?php

            }

        }
?>




<!-- HTML code below -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" type="icon" href="Media/logo10.PNG" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="CSS/Recover.css" />
    <title>Recover Account</title>
</head>

<body>
    <!-- code for Main body  -->
    <div class="container">
        <!-- header having image means logo and welcome heading -->
        <header class="header">
            <img src="Media/LOGO-01.png" alt="logo of company" />
            <!-- heading container having h1 and h3 -->
            <div class="heading">
                <h1>Easy Farming</h1>
                <p><i> Online Machinary Hiring App </i></p>
            </div>
        </header>
        <div class="forget_password">
            <div class="title">
                <h2>Recover Your Account</h2>
            </div>
            <hr />
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                <div class="sign_up" style="align-items: center; text-align: center">
                    <h4>Type Your Email Below To Get Your Account Back</h4>
                    <br />
                    <i> We Will Send a Link To This Email To Reset Your Password.</i>
                    <br />
                    <br />
                    <label for="email"><b>Email</b></label> <br />
                    <input type="email" placeholder="Search your email" name="email" required />
                    <br />
                    <br />
                    <button type="submit" name="submit" id="btn">Send Mail</button>
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