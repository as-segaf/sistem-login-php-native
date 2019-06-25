<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>

	<body>
		<?php 
			session_start();
			if (!isset($_SESSION['username'])) {
				header('location:login.php');

			} else{
				$username = $_SESSION['username'];
			}
		 ?>

		 <div class="content">
		 	<p>Selamat datang <?php echo $username; ?>, Ini adalah halaman admin</p>
		 	<a href="logout.php">Logout</a>
		 </div>
	</body>
</html>