<?php 

require_once('includes/db.php');

$id = $_GET['id'];
$select_query = "SELECT * FROM banners WHERE id = '$id'";
$select = mysqli_query($db_connect, $select_query);
$after_assoc = mysqli_fetch_assoc($select);

if ($after_assoc['status'] == 1) {
    $update_query = "UPDATE banners SET status=0 WHERE id = '$id'";
    $update = mysqli_query($db_connect, $update_query);
    header('location: banner.php');
}
else {
    $update_all_query = "UPDATE banners SET status=0";
    $update_all = mysqli_query($db_connect, $update_all_query);
    header('location: banner.php');
    
    $update_query = "UPDATE banners SET status=1 WHERE id = '$id'";
    $update = mysqli_query($db_connect, $update_query);
    header('location: banner.php');
}




?>