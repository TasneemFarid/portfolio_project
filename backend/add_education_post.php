<?php 
// print_r($_POST);
require_once 'includes/db.php';
$edu_title = $_POST['edu_title'];
$edu_year = $_POST['edu_year'];
$edu_percentage = $_POST['edu_percentage'];
$status = $_POST['status'];


$education_insert_quary = "INSERT INTO educations (edu_title,edu_year,edu_percentage,status) VALUES ('$edu_title', '$edu_year', '$edu_percentage', '$status')";
mysqli_query($db_connect,$education_insert_quary);
header('location: view_education.php')
?>