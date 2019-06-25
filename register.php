<!DOCTYPE html>
<html>
	<head>
		<title>Form Register</title>
	</head>

	<body>
		<?php 
			session_start();
			if (isset($_SESSION['username'])) {
				header('location:index.php');
			}

		 ?>

		 <form action="prosesRegister.php" method="post">
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
			 		<td>Role :</td>
			 		<td>
			 			<select name="role" required>
			 				<option value=1>1</option>
			 				<option value=2>2</option>
			 			</select>
			 		</td>
			 	</tr>
			 	<tr>
			 		<td></td>
			 		<td><input type="submit" name="submit"> <input type="reset" name="cancel"></td>
			 	</tr>
			 	<tr>
			 		<td colspan="2">Sudah punya akun? <a href="login.php"><b>Login</b></a></td>
			 	</tr>
		 	</table>
		 </form>
	</body>
</html>