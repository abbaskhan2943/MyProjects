<!-- PHP Starts down here  -->
<?php
session_start();
include "connect.php";

if(isset($_POST['submit'])){
    // fetch the data, stored in the name variable through Post method. 
    $firstname= mysqli_real_escape_string($connect,$_POST['fname']);
    $lastname= mysqli_real_escape_string($connect,$_POST['lname']); 
   // $username= mysqli_real_escape_string($connect,$_POST['Username']); 
    $email= mysqli_real_escape_string($connect,$_POST['email']);
    $mobileNo= mysqli_real_escape_string($connect,$_POST['mobileNumber']); 
    $password= mysqli_real_escape_string($connect,$_POST['password']);
    $re_password = mysqli_real_escape_string($connect,$_POST ['re-password']);
    //code for  password encryption
    $passcode = password_hash ($password, PASSWORD_BCRYPT);
    $re_passcode = password_hash($re_password, PASSWORD_BCRYPT);

    // generate random tokens
    $token = bin2hex(random_bytes(15));
    
    // to check if the email already exists in any other row of our table in database or not

    $mailquery = "select * from users where Email = '$email' ";
    $query = mysqli_query($connect, $mailquery);

    // to check if the email is creater than zero ( 0 )
    $mailcheck = mysqli_num_rows($query);
    if($mailcheck>0){
       // echo "Email already exists";
        ?>
<script>
alert("Email already exists");
</script>
<?php
    }
    else
    {
        if ($password === $re_password){

            $insertData = " INSERT INTO users (First_Name,Last_Name, Email, MobileNo, Password, Re_Password, token, Statuss) VALUES ('$firstname','$lastname','$email','$mobileNo','$passcode', '$re_passcode','$token','inactive')";
            
            $iquery = mysqli_query($connect, $insertData);

            if($iquery){
                
                $subject = "Email Activation Link";
                $body = "Hi, $email. Click the link to verify/activate your account http://localhost/EasyFarming_AdminPanel/activate.php?token=$token ";
                $Sender_email = "From: abbas.ali14395@gmail.com";

                if (mail($email, $subject, $body, $Sender_email)) {
                    $_SESSION['msg'] = "Check your mail for token to activate your acount $email";
                    header("location: signin.php");
                } else {
                    ?>
<script>
alert("Email sending failed...");
</script>
<?php
                    // echo "";
                }
            }
            else{
                ?>
<script>
alert("Data did not succeed to Insert");
</script>
<?php

            }
            
        
        }
        else
        {
            ?>
<script>
alert("Passwords didn`t match. Please check...");
</script>
<?php
        }
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
    <link rel="stylesheet" href="CSS/Signup.css" />
    <title>Sign Up - Easy Farming</title>
</head>

<body>
    <header class="header">
        <img src="Media/LOGO-01.png" alt="Company Logo" />
        <!-- heading container having h1 and h3 -->
        <div class="header_heading">
            <h1>Welcome to Easy Farming</h1>

            <h3>Online Machinary Hiring Application</h3>
        </div>
        <!-- container having link of sign-up page  -->
        <div class="sign_up_link">
            <a>Already Registered ?</a>
            <a href="Signin.php"><button>Sign-In</button></a>
            <!-- sign up button in header section -->
        </div>
    </header>
    <div class="container">
        <div class="sign_up">
            <div class="title">
                <h2>Sign-Up</h2>
            </div>
            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" class="form" method="post">
                <label for="name"><b>Name</b> </label><br />
                <label for="name" class="fname_label"> First Name </label>
                <input class="fname_input" type="text" size="30" placeholder="Enter your first name" name="fname"
                    required />
                <label for="lastname" class="lname">Last Name </label>
                <input size="30" type="text" class="lnameinput" placeholder="Enter your last name" name="lname"
                    required /><br /><br />
                <label for="text"><b>Contect</b></label> <br />
                <label for="mobile.No" class="mobile_label">Mobile.No </label>
                <input class="mobile_input" type="text" size="30" placeholder="Enter your mobile num"
                    name="mobileNumber" required />
                <label for="name" class="lmail"> E-mail </label>
                <input size="30" type="email" class="imail" placeholder="Enter your Email" name="email"
                    required /><br /><br />
                <label for="text"><b>Password</b></label><br />
                <label for="password" class="pass_label">Password </label>
                <input class="password_input" type="password" size="30" placeholder="set password" name="password"
                    required />
                <label for="password" class="cpassword">Confirm Password</label>
                <input size="30" type="password" class="icpassword" placeholder="Re-Enter password" name="re-password"
                    required /><br /><br />
                <button type="submit" name="submit" id="btn">Sign-Up</button><br /><br />
            </form>
        </div>
        <div class="footer">
            <p>All Rights reserved Easyforming &copy; 2022</p>
        </div>
    </div>
</body>

</html>