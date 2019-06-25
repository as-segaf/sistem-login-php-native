<?php 
	include'../config.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$role     = $_POST['role'];
	$cek	  = mysqli_query($link, "SELECT * FROM user WHERE username='$username'");
	$insert   = ("INSERT INTO user (username, fbsql_password(link_identifier)	ord, role) VALUES ('$username', '$password', '$role')");

	if (mysqli_num_rows($cek) > 0) {
		echo "Username sudah terdaftar! <a href='register.php'>Kembali</a> ";

	} else if (mysqli_query($link, $insert)) {
		echo "Register berhasil, silahkan <a href='login.php'>login</a>";

	}else{
		echo "Terjadi kesalahan, silahkan coba lagi <a href='register.php'>Daftar</a>";
	}

 ?>