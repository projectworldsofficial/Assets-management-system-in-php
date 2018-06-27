<?php include 'core/init.php';

$id = $_GET['id'];
delete_data($con,$id);
header('location:home.php');
