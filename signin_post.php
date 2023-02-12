<?php
session_start();

$email = $_POST['email'];
$password = md5($_POST['password']);

$db_connect = mysqli_connect('localhost', 'root', '', 'nat_boltu');

$approval_query = "SELECT COUNT(*) AS approval FROM users WHERE email='$email' AND password='$password'";
$approval = mysqli_query($db_connect, $approval_query);
$after_approval_assoc = mysqli_fetch_assoc($approval);

$user_info_query = "SELECT * FROM users WHERE email='$email'";
$user_info = mysqli_query($db_connect, $user_info_query);
$after_user_info_assoc = mysqli_fetch_assoc($user_info);


if($after_approval_assoc['approval']==1) {
    $_SESSION['db_email'] = $email;
    $_SESSION['db_id'] = $after_user_info_assoc['id'];
    $_SESSION['db_name'] = $after_user_info_assoc['name'];
    header('location: backend/dashboard.php');
}
else {
    header('location: signin.php');
    $_SESSION['signin_error'] = "Email or Password Didn't Match!";
}

?>