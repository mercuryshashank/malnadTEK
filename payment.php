<html>
<head>
	<title></title>
	
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.bundle.min.js" integrity="sha384-u/bQvRA/1bobcXlcEYpsEdFVK/vJs3+T+nXLsBYJthmdBuavHvAW6UsmqO2Gd/F9" crossorigin="anonymous"></script>

</head>
<body>

<div class="col-lg-6 m-auto">
	
	<form method="post" >
		<br><div>
			<div class="card-header bg-dark">
				<h4 class="text-white text-center">PAYMENT DETAILS</h4>
			</div>
		</br>
			<div class="row"><div class="col-md-12"><label>USER ID</label><input type="text" name="USER_ID" class="form-control" required  title="this field accepts only numbers"></div>
			</div><br>
			<div class="row"><div class="col-md-12"><label>PAYMENT AMOUNT</label><input type="text" name="PAYMENT_AMOUNT" class="form-control" required  title="this field accepts only numbers"></div>
			</div>
			<br>
			
			
			<div class="row">
			<div class="col-md-12">
			<label>PAYMENT TYPE(CARD OR CASH)</label><input type="text" name="PAYMENT_TYPE" class="form-control" required>
			</div>
			</div>
			<br>
            <div  class="row">
			<div class="col-md-12"><button class="btn btn-success col-lg-12" name="done">PAY</button></div>
		    </div>
	</form>
</div>
</body>
</html>
<?php

include 'conn.php';
if(isset($_POST['done']))
{
    $USER_ID = $_POST['USER_ID'];
	$PAYMENT_AMOUNT = $_POST['PAYMENT_AMOUNT'];
	$PAYMENT_TYPE = $_POST['PAYMENT_TYPE'];
	
	
	
	$sq="INSERT INTO PAYMENT VALUES ($USER_ID,$PAYMENT_AMOUNT,'$PAYMENT_TYPE')";
	
	
	
    $query = mysqli_query($conn,$sq);
	
	header("location:status.php");
}
?>

