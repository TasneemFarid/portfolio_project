<?php 

require_once('includes/db.php');

$id = $_POST['id'];
$service_title = $_POST['service_title'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$status = $_POST['status'];

$update_query = "UPDATE services SET service_title='$service_title', service_description='$service_description', service_icon='$service_icon', status='$status' WHERE id = '$id'";
$update = mysqli_query($db_connect, $update_query);

header('location: view_service.php');

?>