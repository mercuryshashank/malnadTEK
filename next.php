<?php
$name=$_POST['admin'];
$pass=$_POST['passwd'];
$servername ="localhost";
$username ="root";
$password ="";
$dbname = "TrekDB";
$con = new mysqli($servername,$username,$pasword,$dbname);
if($con){
	echo "connection successful";
}
else
{
	echo" no connection";
}
mysqli_select_db($con,'TrekDB');
$q=" select * from ADMIN where ADMIN_ID='$name' and PASSWD='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num == 1)
{
	header('location:customer.php');
}
else{
	header('location:startpage.php');
}
?>
