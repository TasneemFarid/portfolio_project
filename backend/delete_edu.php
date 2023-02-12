<?php 

require_once('includes/db.php');

$id = $_GET['id'];

$delete_query = "DELETE FROM educations WHERE id = '$id'";
$delete = mysqli_query($db_connect, $delete_query);

header('location: view_education.php');

?>