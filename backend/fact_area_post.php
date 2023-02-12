<?php

require_once('includes/db.php');

$fact_icon = $_POST['fact_icon'];
$fact_count = $_POST['fact_count'];
$fact_title = $_POST['fact_title'];
$status = $_POST['status'];


$insert_fact_query = "INSERT INTO facts(fact_icon, fact_count, fact_title, status) VALUES('$fact_icon', '$fact_count', '$fact_title', '$status')";
$insert_fact = mysqli_query($db_connect, $insert_fact_query);
header('location: view_fact.php');
?>