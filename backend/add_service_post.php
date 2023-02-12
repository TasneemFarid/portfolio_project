<?php

require_once('includes/db.php');

$service_title = $_POST['service_title'];
$service_description = $_POST['service_description'];
$service_icon = $_POST['service_icon'];
$status = $_POST['status'];


$insert_service_query = "INSERT INTO services(service_title, service_description, service_icon, status) VALUES('$service_title', '$service_description', '$service_icon', '$status')";
$insert_service = mysqli_query($db_connect, $insert_service_query);
header('location: view_service.php');
?>