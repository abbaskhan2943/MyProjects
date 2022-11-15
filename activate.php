<?php
session_start();
include 'connect.php';
if(isset($_GET['token'])){
    $token = $_GET['token'];

    $updatequery =  "update users set Statuss='active' where token='$token' ";
    $query = mysqli_query($connect, $updatequery);

    if($query){
        if(isset($_SESSION['msg'])){
            $_SESSION['msg'] = "Account Updated Successfully.";
            header('location:signin.php');
        } 
        else{
            $_SESSION['msg'] = "You are logged out.";
            header('location:signin.php');
        } 
    }else{
        $_SESSION['msg'] = "Account not Updated.";
            header('location:signup.php');
    }
}
// echo "Your account is activated....";
?>