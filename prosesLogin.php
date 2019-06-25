<?php 
	session_start();
	include'config.php';
	$username = $_POST['username'];
	$password = $_POST['password'];
	$cek      = mysqli_query($link, "SELECT * FROM user WHERE username='$username'");
	$hasil    = mysqli_fetch_array($cek);

	if (mysqli_num_rows($cek) == 0) {
		$_SESSION['message'] = "akun belum terdaftar";
		header('location:login.php?pesan=gagal');

	}else if ($password != $hasil['password']) {
		$_SESSION['message'] = "password salah";
		header('location:login.php?pesan=gagal');

	}else{
		$_SESSION['id'] = $hasil['id'];
		$_SESSION['username'] = $hasil['username'];
		$_SESSION['role'] = $hasil['role'];

		if ($_SESSION['role'] == 0 || $_SESSION['role'] == 1) {
			header('location:index.php');
			
		}else if ($_SESSION['role'] == 2) {
			header('location:index2.php');

		}
	}
 ?>