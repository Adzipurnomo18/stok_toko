<?php 
	session_start();
	include 'koneksi.php';

	if(isset($_POST['submit'])){
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$username = mysqli_real_escape_string($conn, $_POST['username']);
		$password = mysqli_real_escape_string($conn, $_POST['password']);
		$level = mysqli_real_escape_string($conn, $_POST['level']);

		// Check if the username already exists
		$cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '$username'");
		
		if(mysqli_num_rows($cek) > 0){
			echo '<div class="alert alert-error">Username sudah digunakan</div>';
		}else{
			// Hash the password before saving it to the database
			$hashedPassword = md5($password);

			// Insert new user into the database
			$insertQuery = "INSERT INTO pengguna (email, username, password, level) VALUES ('$email', '$username', '$hashedPassword', '$level')";
			$result = mysqli_query($conn, $insertQuery);

			if($result){
				echo '<div class="alert alert-success">Registrasi berhasil. Silahkan login.</div>';
			}else{
				echo '<div class="alert alert-error">Registrasi gagal. Silahkan coba lagi.</div>';
			}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Halaman Login</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>
	<!-- page login -->
	<div class="page-login">

		<!-- box -->
		<div class="box box-login">
 
			<!-- box header -->
			<div class="box-header text-center">
				Daftar Akun Disini
			</div>

			<!-- box body -->
			<div class="box-body">

				<?php 
					if(isset($_GET['msg'])){
						echo "<div class='alert alert-error'>".$_GET['msg']."</div>";
					}
				 ?>
				
				<!-- form login -->
				<form action="" method="POST">

					<div class="form-group">
						<label>Email</label>
						<input type="text" name="email" placeholder="Email" class="input-control">
					</div>
					<div class="form-group">
						<label>Username</label>
						<input type="text" name="username" placeholder="Username" class="input-control">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="password" placeholder="Password" class="input-control">
					</div>
					<div class="form-group">
						<label for="level">Level</label>
						<select name="level" id="level" class="form-control">
							<option>- Pilih -</option>
							<option>Umum</option>
						</select>
					</div>

					<input type="submit" name="submit" value="Daftar" class="btn">

				</form>
			</div>

			<!-- box footer -->
			<div class="box-footer text-center">
				<p> Sudah Punya Akun? <a href="login.php">Silahkan Login</a></p>
			</div>
			
		</div>
	</div>  
</body>
</html>
