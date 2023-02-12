<?php

require_once('includes/db.php');

$work_category = $_POST['work_category'];
$work_title = $_POST['work_title'];
$status = $_POST['status'];
// $work_img = $_FILES['work_img'];

$naming_work = $_FILES['work_img']['name'];
$extention = end(explode('.', $naming_work));
$work_name = $work_title . time() . '.' . $extention;
$temp_location = $_FILES['work_img']['tmp_name'];
$new_loaction = "uploads/works/".$work_name;
move_uploaded_file($temp_location,$new_loaction);

if (isset($_POST['add_work_info'])) {
    $work_info_update_query = "INSERT INTO works(work_category, work_title, work_img, status) VALUES('$work_category', '$work_title', '$work_name', '$status')";
    $work_info_update = mysqli_query($db_connect, $work_info_update_query);
    header('location: view_work.php');
}
?>