<?php 

require_once('includes/db.php');

$id = $_GET['id'];
$select_query = "SELECT * FROM educations WHERE id = '$id'";
$select = mysqli_query($db_connect, $select_query);
$after_assoc = mysqli_fetch_assoc($select);

if ($after_assoc['status'] == 'active') {
    $update_query = "UPDATE educations SET status='deactive' WHERE id = '$id'";
    $update = mysqli_query($db_connect, $update_query);
    header('location: view_education.php');
}
else {
    $update_query = "UPDATE educations SET status='active' WHERE id = '$id'";
    $update = mysqli_query($db_connect, $update_query);
    header('location: view_education.php');
}




?>