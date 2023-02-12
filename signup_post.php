<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$valid_name = str_replace(array(" ", "-", "'"), "", $name);
$preg_matchs = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/',$password);
$redirection = false;

if($name) {
    if(ctype_alpha($valid_name)) {
        $_SESSION['old_name'] = $name;
    }
    else {
        $_SESSION['name_error'] = "Name is not Valid!";
        $redirection = true;
    }
}
else {
    $_SESSION['name_error'] = "Name is required!";
    $redirection = true;
}

if($email) {
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['old_email'] = $email;
    }
    else {
        $_SESSION['email_error'] = "Email is not Valid!";
        $redirection = true;
    }
}
else {
    $_SESSION['email_error'] = "Email is required!";
    $redirection = true;
}

if($password) {
    if($preg_matchs) {
        $_SESSION['old_pass'] = $password;
    }
    else {
        $_SESSION['pass_error'] = "Password is not Valid!";
        $redirection = true;
    }
}
else {
    $_SESSION['pass_error'] = "Password is required!";
    $redirection = true;
}

if($confirm_password) {
    if($password == $confirm_password) {
        $_SESSION['old_conpass'] = $confirm_password;
    }
    else {
        $_SESSION['conpass_error'] = "Password Didn't Match!";
        $redirection = true;
    }
}
else {
    $_SESSION['conpass_error'] = "Re-write Passwoord!";
    $redirection = true;
}

if ($redirection) {
    header('location: signup.php');
}
else {
    $encrypt_pass = md5($password);
    $db_connect = mysqli_connect('localhost', 'root', '', 'nat_boltu');
    $dup_email_query = "SELECT COUNT(*) AS dup_email FROM users WHERE email='$email'";
    $dup_email = mysqli_query($db_connect, $dup_email_query);
    $after_dup_email_assoc = mysqli_fetch_assoc($dup_email);

    if($after_dup_email_assoc['dup_email']==1) {
        $_SESSION['dup_email_error'] = "$email Already Exists!";
        $redirection = true;
    }
    else {
        $insert_query = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$encrypt_pass')";
        $insert_data = mysqli_query($db_connect, $insert_query);
        $_SESSION['signup_success'] = "Signed Up Successfully!";
        header('location: signin.php');
    }

}

?>