<?php
session_start();
include('assets/config/dbcon.php');
if(isset($_POST['login_btn']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $log_query = "SELECT * FROM `tbl_admin` WHERE email = '$email' AND password = '$password' LIMIT 1";
    $log_query_run = mysqli_query($con,$log_query);

    if(mysqli_num_rows($log_query_run) > 0)
    {
        foreach($log_query_run as $row){
            $admin_id = $row['id'];
            $user_name = $row['username'];
            $user_email = $row['email'];
        }        

        $_SESSION['auth'] = true;
        $_SESSION['auth_user'] = [
            'admin_id'=>$admin_id,
            'user_name'=>$user_name,
            'user_email'=>$user_email
        ];

        $_SESSION['status'] = "Logged In Successfully";
        header('Location: index.php');
    }   
    else
    {
        $_SESSION['status'] = "Invalid Email Or password";
        header('Location: login.php');
    }
}
else
{
    $_SESSION['status'] = "Access Denied";
    header('Location: login.php');
}
?>