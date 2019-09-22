<?php
include 'conn.php';
$q="select * from REVIEW";
$query = mysqli_query($conn,$q);
?>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style2.css">
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>
<div class="col-lg-6 m-auto">
<form method="post" >
		<br><div>
			<div class="card-header bg-dark">
				<h4 class="text-white text-center">REVIEW</h4>
			</div>
			<div class="container">
		<table class="table table-stripped table-hover table-bordered" >
		<tr>
		<th>NAME</th>
		<th>REVIEW</th>
		</tr>
<?php
while ($res=mysqli_fetch_array($query)) {
?>
			<tr>
				<th><?php echo $res['USER_NAME'] ?></th>
				<th><?php echo $res['REVIEW'] ?></th>
			</tr>
<?php }
?> 

	
		</table>
	</div>
		</br>
			<div class="row">
			<div class="col-md-12">
			<label>USER NAME</label>
			<input type="text" name="USER_NAME" class="form-control" required>
			</div>
			</div>
			<div class="row">
			<div class="col-md-12"><label>REVIEW</label><input type="text" name="REVIEW" class="form-control" required></div></div><br> 
			</div>
			<br>
            <div class="row">
			<div class="col-md-6"><button class="btn btn-success col-lg-12" name="done">SUBMIT</button></div>
			<div class="col-md-6"><a href="startpage.php"><input type="button" name="" value="CANCEL" class="btn btn-danger col-lg-12"></a></div></div>
		    </div>
	</form>
</div>
</body>
</html>
<?php
include 'conn.php';
if(isset($_POST['done']))
{
    $USER_NAME = $_POST['USER_NAME'];
	$REVIEW = $_POST['REVIEW'];
	
	$sq="INSERT INTO REVIEW VALUES ('$USER_NAME','$REVIEW')";
    $query = mysqli_query($conn,$sq);

	header("location:review.php");
}
?>
