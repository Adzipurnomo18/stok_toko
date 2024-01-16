<?php include 'header.php' ?>

		<!-- content -->
		<div class="content">

			<div class="container">
				
				<div class="box">

					<div class="box-header">
						Tambah Pengguna
					</div>
					
					<div class="box-body">
						 <form action="" method="POST">
						 	
						 	<div class="form-group">
						 		<label>Email</label>
						 		<input type="text" name="email" placeholder="Email" class="input-control" required>
						 	</div>
						 	<div class="form-group">
						 		<label>Username</label>
						 		<input type="text" name="username" placeholder="Username" class="input-control" required>
						 	</div>
						 	<div class="form-group">
						 		<label>Level</label>
						 		<select name="level" class="input-control" required>
						 			<option value="">Pilih</option>
						 			<option value="Super Admin">Super Admin</option>
						 			<option value="Umum">Umum</option>
						 		</select>
						 	</div>

						 	<button type="button" class="btn" onclick="window.location = 'pengguna.php'">Kembali</button>
						 	<input type="submit" name="submit" value="Simpan" class="btn btn-blue">

						 </form>

						 <?php 
						 	if(isset($_POST['submit'])){

						 		$email  = addslashes(ucwords($_POST['email']));
						 		$username  = addslashes($_POST['username']);
						 		$level = $_POST['level'];
						 		$pass  = '12345';

						 		$cek   = mysqli_query($conn, "SELECT username FROM pengguna WHERE username = '".$username."'");
						 		if(mysqli_num_rows($cek) > 1){
						 			echo '<div class="alert alert-error">Username sudah digunakan</div>';
						 		}else{
						 			$simpan = mysqli_query($conn, "INSERT INTO pengguna VALUES (
								 			null,
								 			'".$email."',
								 			'".$username."',
								 			'".MD5($pass)."',
								 			'".$level."'
								 	)");

						 		if($simpan){
						 			echo '<div class="alert alert-success">simpan berhasil</div>';
						 		}else{
						 			echo 'gagal simpan' .mysqli_error($conn);
						 		}

						 		}	

						 	}
						  ?>

					</div>

				</div>

			</div>

		</div>

<?php include 'footer.php' ?>