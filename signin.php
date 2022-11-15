<?php
session_start();

include_once "connect.php";

if(isset($_POST['submit'])){
    $email = $_POST["email"];
    $password = $_POST["password"];

    
    
    $email_fetch = "Select * from users where Email='$email' AND Statuss='active' ";
    // $mobile_fetch = "Select * from users where MobileNo='$email' ";
    $num_fetch =
    $query =mysqli_query($connect,$email_fetch);

    $email_count_check = mysqli_num_rows($query);
    
    if($email_count_check){
        $email_pass = mysqli_fetch_assoc($query);

        $db_pass = $email_pass['Password'];
        $pass_decode = password_verify($password, $db_pass);
        if ($pass_decode)
        {
            echo '<script>alert("Login Successful")</script>';
            // echo "login successfull";
            header("location: Home.php?login=success");
            
        }
        else
        {
            echo '<script>alert("Wrong Password")</script>';
            // $_SESSION['Error']= "Wrong Password";
            // echo "Wrong Password";
        }
    }
    else{
        echo "Email not found..";
    }
}

?>

<!-- php Ends Here -->



<!-- HTML code starts down below -->

<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="icon" type="icon" href="Media/logo10.PNG" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login - Easy Farming</title>
    <link rel="stylesheet" href="Signin.css" />
</head>

<body>
    <header class="header">
        <img src="Media/LOGO-01.png" alt="Company Logo" />
        <!-- heading container having h1 and h3 -->
        <div class="header_heading">
            <p>
            <h1>Welcome Back to Easy Farming</h1>
            <i>Online Machinary Hiring Application</i>
            </p>

        </div>
        <!-- container having link of sign-up page  -->
        <div class="sign_up_link">
            <a href="Signup.php">Not Registered ?</a>
            <a href="Signup.php"><button>SIGN UP</button></a>
            <!-- sign up button in header section -->
        </div>
    </header>
    <!-- main container having header + main content + footer  -->
    <div class="main_container">
        <!-- main container having image container + form continer -->
        <div class="main_content">

            <div class="login_box">
                <!-- form starts from here -->
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
                    <h1>Login</h1>
                    <hr />
                    Please Login With Your Credentials Below
                    <br>
                    <br>
                    <div>
                        <p style="background-color: 4BB543; color: white; width: 70%; margin:auto;"> <?php 
                        if(isset($_SESSION['msg'])){

                            echo $_SESSION['msg']; 
                        }else{
                            echo $_SESSION['msg'] = "You`re Signed Out, Please Sign In Again";
                        }
                            ?> </p>
                    </div>
                    <br>
                    <!-- email label -->
                    <label for="email" class="email-label">E-mail</label><br />
                    <!-- email input -->
                    <input type="email" size="28" placeholder="Email.example@sample.com" name="email"
                        required /><br /><br />
                    <!-- password label -->
                    <label for="password">Password</label><br />
                    <!-- password input -->
                    <input type="password" size="28" placeholder="a-z A-Z 1-9 @ !" name="password"
                        required /><br /><br />
                    <!-- check box -->
                    <input type="checkbox" />
                    <!-- simple text beside the check-box -->
                    Stay Signed-In
                    <!-- link to go for forget password page -->
                    <a href="Recover.php">Forgot your Password?</a><br />
                    <!-- sign in button -->
                    <br />
                    <button type="submit" name="submit">SIGN IN</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>All Rights reserved Easyforming &copy; 2022</p>
    </div>
</body>

</html>