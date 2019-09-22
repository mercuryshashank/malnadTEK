<html>
<head>
<title>Trekking Website</title>
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body> 
<div class="main">
		<div class="logo">
		<img src="logo.png">
		</div>
		<ul>
			<li><a href="firstpage.php">Home</a></li>
			<li><a href="register.php">Register now</a></li>
			<li class="active"><a href="startpage.php">Admin Login</a></li>
			<li><a href="review.php">Review</a></li>
		</ul>
	</div>
<h1><center>TREKKING MANAGEMENT SYSTEM</center></h1>
<style="background-color: rgb(240, 240, 240);">
<h3><center>BOOK YOUR SEATS AS SOON AS POSSIBLE</center></h3>
<div class="login-page">
<div class="form">
	<form action="next.php" method="POST" class="admin-form">
	<input type="text" name="admin" placeholder="Admin Id" required />
	<input type="password" name="passwd" placeholder="Password" required />
	<button type="submit">Login</button>
	<p class="message"><B>For enrollment?</B> <a href="register.php"><B>Enroll</B></p>
	</form>
</div>
</div>

</body>
</html> 
