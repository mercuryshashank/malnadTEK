<?php
include 'conn.php';

$q="select * from CUSTOMER ";
$query = mysqli_query($conn,$q);

$q2="select * FROM TREKKING ";
$query2 = mysqli_query($conn,$q2);

$q3="select * from PAYMENT ";
$query3 = mysqli_query($conn,$q3);


?>
<html>
<head>
	<title></title>
	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>
<div class="container">
	<div class="col-lg-12"><br>
		<div class="row"> 
		<h5 class="col-lg-4">CUSTOMER DETAIL</h5>
		<a href="startpage.php" class="col-lg-3"><button class="btn btn-success col-lg-4" name="logout">logout</button></a>
        </div>
		<table class="table table-stripped table-hover table-bordered" >
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h5>CUSTOMER ID</h5></th>
				<th><h5>CUSTOMER NAME</h5></th>
				<th><h5>ADDRESS</h5></th>
				<th><h5>PHONE</h5></th>
			</tr>
<?php
while ($res=mysqli_fetch_array($query)) {
?>
			<tr>
				<th><?php echo $res['USER_ID'] ?></th>
				<th><?php echo $res['NAME'] ?></th>
				<th><?php echo $res['ADDRESS'] ?></th>
				<th><?php echo $res['PHONE'] ?></th>
				<th><a href="delete.php?USER_ID=<?php echo $res['USER_ID']; ?>" class="text-white"><button class="btn btn-success col-lg-12">DELETE</button></a></th>
				</tr>
<?php }
?>

	
		</table>
	</div>
</div>
<div class="container">
	<div class="col-lg-12"><br>
		<div class="row"> 
		<h5 class="col-lg-4">TREKKING DETAIL</h5>
        </div>
		<table class="table table-stripped table-hover table-bordered" >
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h5>EMAIL ID</h5></th>
				<th><h5>LOCATION</h5></th>
				<th><h5>NUMBER OF DAYS</h5></th>
				<th><h5>TREKKING PLACE</h5></th>
				
				
				
			</tr>
<?php
while ($res2=mysqli_fetch_array($query2)) {
?>
			<tr>
				<th><?php echo $res2['EMAIL_ID'] ?></th>
				<th><?php echo $res2['LOCATION'] ?></th>
				<th><?php echo $res2['NOD'] ?></th>
				<th><?php echo $res2['TREK_PLACE'] ?></th>
				<th><a href="delete1.php?EMAIL_ID=<?php echo $res2['EMAIL_ID']; ?>" class="text-white"><button class="btn btn-success col-lg-12">DELETE</button></a></th>
				</tr>
				
<?php }
?>

	
		</table>
	</div>
</div>

<div class="container">
	<div class="col-lg-12"><br>
		<div class="row"> 
		<h5 class="col-lg-4">PAYMENT DETAIL</h5>
        </div>
		<table class="table table-stripped table-hover table-bordered" >
			<tr class="text-dark" style="background-color:LightGray;">
				<th><h5>CUSTOMER ID</h5></th>
				<th><h5>PAYMENT AMOUNT</h5></th>
				<th><h5>PAYMENT TYPE</h5></th>
				
			</tr>
<?php
while ($res3=mysqli_fetch_array($query3)) {
?>
			<tr>
				<th><?php echo $res3['USER_ID'] ?></th>
				<th><?php echo $res3['PAYMENT_AMOUNT'] ?></th>
				<th><?php echo $res3['PAYMENT_TYPE'] ?></th>
		
			</tr>
<?php }
?>

	
		</table>
	</div>
</div>
	

</div>
</body>
</html>
