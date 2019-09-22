<?php
include 'conn.php';
$USER_ID = $_GET['USER_ID'];
$q="DELETE from customer where USER_ID = $USER_ID";
$query = mysqli_query($conn,$q);
header('location:customer.php');
?>
