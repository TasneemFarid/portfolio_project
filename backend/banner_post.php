<?php
session_start();
require_once('includes/db.php');

//Text/////////////////
$banner_subtitle = $_POST['banner_subtitle'];
$banner_title = $_POST['banner_title'];
$banner_description = $_POST['banner_description'];

if (isset($_POST['add_banner_info'])) {
    $banner_info_query = "INSERT INTO banners(banner_subtitle, banner_title, banner_description) VALUES('$banner_subtitle', '$banner_title', '$banner_description')"; 
    $banner_info = mysqli_query($db_connect, $banner_info_query);
    
    $_SESSION['msg']= "Info Added!";
    header('location: banner.php');
}

//Image/////////////////
$banner_img = $_FILES['banner_image']['name'];
$extention = end(explode('.', $banner_img));
$allowed_ext = array('jpg', 'jpeg', 'png', 'webp');

if (isset($_POST['add_banner_image'])) {
    if(in_array($extention, $allowed_ext)){
        if ($_FILES['banner_image']['size'] < 1000000 ) {
            $banner_image_query = "INSERT INTO banner_images(banner_image) VALUES('$banner_img')";
            $banner_image = mysqli_query($db_connect, $banner_image_query);
            $last_id = mysqli_insert_id($db_connect);
            $new_name = $last_id.'.'.$extention;
            $temp_location = $_FILES['banner_image']['tmp_name'];
            $new_loaction = "uploads/banner_image/".$new_name;
            move_uploaded_file($temp_location,$new_loaction);

            $update_query = "UPDATE banner_images SET banner_image = '$new_name' WHERE id='$last_id'";
            $update = mysqli_query($db_connect, $update_query);
    
            $_SESSION['success']= "Image uploaded!";
            header('location: banner.php');
        }else {
            $_SESSION['msg']= "File size too big! Max size 1MB.";
            header('location: banner.php');
        }
    }else {
        $_SESSION['msg']= "Invalid Extension!";
        header('location: banner.php');
    }
} 

?>