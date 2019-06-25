<!DOCTYPE html>
<html>
	<head>
		<title>Form Login</title>
	</head>

	<body>
		<?php 
			session_start();
			if (isset($_SESSION['message'])) {
				$psn = $_SESSION['message'];
				echo $psn;
				session_destroy();	
			}
		 ?>
		<form method="post" action="prosesLogin.php">
			<table>
				<tr>
					<td>Username :</td>
					<td><input type="text" name="username" required></td>
				</tr>
				<tr>
					<td>Password :</td>
					<td><input type="text" name="password" required></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit"> <a href="register.php">Buat akun</a></td>
				</tr>
			</table>
		</form>
	</body>
</html>