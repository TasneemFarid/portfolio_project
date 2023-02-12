<?php 

require_once('includes/db.php');

$id = $_POST['id'];
$edu_title = $_POST['edu_title'];
$edu_year = $_POST['edu_year'];
$edu_percentage = $_POST['edu_percentage'];
$status = $_POST['status'];

$update_query = "UPDATE educations SET edu_title='$edu_title', edu_year='$edu_year', edu_percentage='$edu_percentage', status='$status' WHERE id = '$id'";
$update = mysqli_query($db_connect, $update_query);

header('location: view_education.php');

?>