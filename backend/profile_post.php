<?php

session_start();
require_once('includes/db.php');
$redirection = false;

if (isset($_POST['name_cng_btn'])) {
    $id = $_SESSION['db_id'];
    $new_name = $_POST['change_name'];
    $update_name_query = "UPDATE users SET name = '$new_name' WHERE id = '$id'";
    $update_name = mysqli_query($db_connect, $update_name_query);
    $_SESSION['db_name'] = $new_name;
    $_SESSION['name_update'] = "Name Updated Successfully!";
    $redirection = true;
}

if (isset($_POST['name_cng_btn'])) {
    $id = $_SESSION['db_id'];
    $new_name = $_POST['change_name'];
    $update_name_query = "UPDATE users SET name = '$new_name' WHERE id = '$id'";
    $update_name = mysqli_query($db_connect, $update_name_query);
    $_SESSION['db_name'] = $new_name;
    $_SESSION['name_update'] = "Name Updated Successfully!";
    $redirection = true;
}

if (isset($_POST['pass_cng_btn'])) {
    $old_pass = $_POST['old_password'];
    $new_pass = $_POST['new_password'];
    $confirm_pass = $_POST['confirm_password'];
    $preg_matchs = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_pass);
   

    if ($old_pass) {
        $encrypted_old_pass = md5($old_pass);
        $id = $_SESSION['db_id'];
        $pass_cng_query = "SELECT COUNT(*) AS 'pass_cng' FROM users WHERE password = '$encrypted_old_pass' AND id = '$id'";
        $pass_query = mysqli_query($db_connect, $pass_cng_query);
        $after_pass_assoc = mysqli_fetch_assoc($pass_query);

        if ($after_pass_assoc['pass_cng']==1) {
            $_SESSION['old_pass_input'] = $old_pass;
            $redirection = true;
        }
        else {
            $_SESSION['old_pass_error'] = "Old Paassword is Wrong!";
            $redirection = true;
        }
    }else {
        $_SESSION['old_pass_error'] = "Old Paassword is Required!";
        $redirection = true;
    }

    if ($new_pass) {
        if ($preg_matchs) {
            $_SESSION['new_pass_input'] = $new_pass;
            $redirection = true;
        }else {
            $_SESSION['new_pass_error'] = "Password Must Contain Min 8 Chars with S, C, U, L!";
            $redirection = true;
        }
    }else {
        $_SESSION['new_pass_error'] = "New Paassword is Required!";
        $redirection = true;
    }

    if ($confirm_pass) {
        if ($new_pass == $confirm_pass) {
            $id = $_SESSION['db_id'];
            $encrypted_new_pass = md5($_POST['new_password']);
            $pass_update_query = "UPDATE users SET password = '$encrypted_new_pass' WHERE id = '$id'";
            $pass_update = mysqli_query($db_connect, $pass_update_query);
            $_SESSION['pass_change_success'] = "Password Changed!";
            $redirection = true;
        }else {
            $_SESSION['con_pass_error'] = "Password Didn't Match!";
            $redirection = true;
        }
    }else {
        $_SESSION['con_pass_error'] = "Confirm Paassword is Required!";
        $redirection = true;
    }
    
/////////////////////////////////////////////////////////
    // if ($old_pass) {
        
    //     $encrypted_old_pass = md5($_POST['old_password']);
    //     $id = $_SESSION['db_id'];
    //     $pass_cng_query = "SELECT COUNT(*) AS 'pass_cng' FROM users WHERE password = '$encrypted_old_pass' AND id = '$id'";
    //     $pass_query = mysqli_query($db_connect, $pass_cng_query);
    //     $after_pass_assoc = mysqli_fetch_assoc($pass_query);

    //     if ($after_pass_assoc['pass_cng']==1) {
            
    //         $new_pass = $_POST['new_password'];
    //         if ($new_pass) {
                
    //             $preg_matchs = preg_match('/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{8,20}$/', $new_pass);
    //             if ($preg_matchs) {
                    
    //                 $confirm_pass = $_POST['confirm_password'];
    //                 if ($confirm_pass) {
                       
    //                     if ($new_pass == $confirm_pass) {
    //                         $id = $_SESSION['db_id'];
    //                         $encrypted_new_pass = md5($_POST['new_password']);
    //                         $pass_update_query = "UPDATE users SET password = '$encrypted_new_pass' WHERE id = '$id'";
    //                         $pass_update = mysqli_query($db_connect, $pass_update_query);
    //                         $_SESSION['pass_change_success'] = "Password Changed!";
    //                         $redirection = true;
    //                     } else {
    //                         $_SESSION['con_pass_error'] = "Paassword Didn't Match!";
    //                         $redirection = true;
    //                     }
    //                 } else {
    //                     $_SESSION['con_pass_error'] = "Confirm Paassword is Required!";
    //                     $redirection = true;
    //                 }
    //             } else {
    //                 $_SESSION['new_pass_error'] = "Password is not Valid!";
    //                 $redirection = true;
    //             }
    //         } else {
    //             $_SESSION['new_pass_error'] = "New Paassword is Required!";
    //             $redirection = true;
    //         }
    //     }
    //     else {
    //         $_SESSION['old_pass_error'] = "Old Paassword is Wrong!";
    //         $redirection = true;
    //     }
        
    // } else {
    //     $_SESSION['old_pass_error'] = "Old Paassword is Required!";
    //     $redirection = true;
    // }
////////////////////////////////////////////////////////
}

if ($redirection) {
    header('location: profile.php');
}


//Profile Picture Upload

if (isset($_POST['img_up_btn'])) {
    $size = $_FILES['img_up']['size'];
    if ($size <= 500000) {
        $id = $_SESSION ['db_id'];
        $nameing_part = $_FILES['img_up']['name'];
        $expo = explode('.', $nameing_part);
        $extention = end($expo);
        $full_name= $id.'.'.$extention;
    
        $temp_location = $_FILES['img_up']['tmp_name'];
        $new_loaction = "uploads/profile_photo/".$full_name;
        move_uploaded_file($temp_location,$new_loaction);
        
        $profile_img_update = "UPDATE users SET default_profile_photo = '$full_name' WHERE id = '$id'";
        $profile_img_update_query = mysqli_query($db_connect, $profile_img_update);
        $_SESSION['img_upload'] = "PP Changed!";
        header('location: profile.php');
    }
    else {
        $_SESSION['img_upload'] = "PP size too big!";
        header('location: profile.php');
    }

}

?>