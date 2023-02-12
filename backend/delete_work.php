<?php
require_once('includes/db.php');

$id=$_GET['id'];

$delete = "DELETE FROM works WHERE id='$id'";
$delete_query = mysqli_query($db_connect, $delete);

header('location: view_work.php');
?>