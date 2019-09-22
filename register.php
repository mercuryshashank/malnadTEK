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
				<h4 class="text-white text-center">REGISTRATION FORM</h4>
			</div>
		</br>
			<div class="row"><div class="col-md-6"><label>USER ID</label><input type="text" name="USER_ID" class="form-control" required  title="this field accepts only numbers"></div>
			<div class="col-md-6"><label>USER NAME</label><input type="text" name="NAME" class="form-control" required></div></div><br>
			<div class="row"><div class="col-md-6"><label>PHONE</label><input type="text" name="PHONE" class="form-control" required  title="this field accepts only numbers"></div>
			<div class="col-lg-6"><label>PICK UP LOCATION</label><input type="text" name="LOCATION" class="form-control" required></div>
			</div>
			<br>
			
			<div class="row">
			<div class="col-lg-6"><label>EMAIL ID</label><input type="text" name="EMAIL_ID" class="form-control" required></div>
			<div class="col-lg-6"><label>NUMBER OF DAYS</label><input type="text" name="NOD" class="form-control" required ></div>
			</div>
			<br>
			
			
			<div class="row">
			<div class="col-md-6">
			<label>ADDRESS</label><input type="text" name="ADDRESS" class="form-control" required>
			</div>
			<div class="col-md-6">
			<label>TREK LOCATION</label>
			<br>
			<select name="TREK_PLACE" id="TREK_PLACE">
			<option value="Savandurga">Savandurga</option>
			<option value="Tadiyandamol">Tadiyandamol</option>
			<option value="Ramanagara">Ramanagara</option>
			<option value="Narayangiri">Narayangiri</option>
			<option value="Devarayandurga">Devarayandurga</option>
			<option value="Madhugiri">Madhugiri</option>
			<option value="Kodachadri">Kodachadri</option>
			<option value="Kumara Parva that">Kumara Parva that</option>
			<option value="Kudremukh">Kudremukh</option>
			<option value="Bheemeshwari">Bheemeshwari</option>
			</select>
			</div>
			</div>
			<br>
            <div class="row">
			<div class="col-md-6"><button class="btn btn-success col-lg-12" name="done">PAYMENT</button></div>
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
    $USER_ID = $_POST['USER_ID'];
	$NAME = $_POST['NAME'];
	$ADDRESS = $_POST['ADDRESS'];
	$PHONE = $_POST['PHONE'];
	$EMAIL_ID = $_POST['EMAIL_ID'];
	$TREK_PLACE=$_POST['TREK_PLACE'];
	
	$NOD = $_POST['NOD'];
	$LOCATION=$_POST['LOCATION'];
	
	$sq="INSERT INTO CUSTOMER VALUES ($USER_ID,'$NAME','$ADDRESS',$PHONE)";
	
	$sq1="INSERT INTO TREKKING VALUES ('$EMAIL_ID','$LOCATION',$NOD,'$TREK_PLACE')";
	
	$S = "INSERT INTO BOOK_SLOTS VALUES($USER_ID,'$EMAIL_ID')";
	
    $query = mysqli_query($conn,$sq);
	$query1 = mysqli_query($conn,$sq1);
	$query2 = mysqli_query($conn,$S);
	
	header("location:payment.php");
}
?>
