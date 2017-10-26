<!doctype html>
<html>
<head>
	<title>form instagram</title>
	<link rel="stylesheet" type="text/css" href="form.css">
</head>

<body>
<?php
	$host="localhost";
	$user="root";
	$password="";
	$email=$_POST['email'];
	$fullname=$_POST['nama'];
	$username=$_POST['user'];
	$pw=$_POST['pass'];
	
	if ($username)
	{
		$conn=mysqli_connect($host,$user,$password);
		msqli_select_db($conn,'dblogin');
		$sql="insert into tbig values('$email','$fullname','$username','$pw')";
		$hasil=mysql_query($conn,$sql);
		
	}
	else{
		echo"Data gagal Disimpan";
	}
	?>
	<div id="form">
		<div class = "content">
			<form id = "contact" action ="" method="post">
				<h3><center> Instagram </center></h3>
				<h4><center> Buat akun untuk melihat foto dan video teman Anda </center></h4>
				<button> Masuk dengan facebook </button><br>
				<p style="margin: 5px;color:white">atau</p>
				<input type="text" name="Email" placeholder="Email">
				</br>
				<input type="text" name="Fullname" placeholder="Fullname"></br>
				<input type="text" name="Name" placeholder="Name"></br>
				<input type="Password" name="Password" placeholder="Password"><br>
				<button type="submit">Masuk</button><br>
				<p>Jika Anda masuk, berarti Anda setuju tentang <br><b>Kebijakan dan Privasi</b></p>
			</form>
		</center>
</body>
</html>