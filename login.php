<!DOCTYPE html>
<html>
<head>
	<title>Stop Card</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 
	

	<?php 
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "<div class='alert'>Username dan Password tidak sesuai !</div>";
		}
	}
	?>
 
	<div class="kotak_login">
		<p class="tulisan_login">Menu login</p>
 
		<form action="cek_login.php" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Masukkan Username..." required="required" autocomplete="off">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Masukkan Password..." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN">
 
			<br/>
			<br/>
			<center>
				<button  class="tombol_login"><a href="index.php">KEMBALI</a></button>
				<!-- <a class="link" href="https://www.malasngoding.com">kembali</a> -->
			</center>
		</form>
		
	</div>
 
 
</body>
</html>