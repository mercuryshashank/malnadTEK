<?php
include 'conn.php';
$EMAIL_ID =$_GET['EMAIL_ID'];
$q1="DELETE FROM TREKKING WHERE EMAIL_ID='$EMAIL_ID'";
$query2= mysqli_query($conn,$q1);
header('location:customer.php');
?>
