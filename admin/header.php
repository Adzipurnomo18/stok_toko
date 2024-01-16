<?php 
	session_start();
	include '../koneksi.php';
	if(!isset($_SESSION['status_login'])){
		echo "<script>window.location = '../login.php?msg=Harap Login Terlebih Dahulu!'</script>";
	}
	date_default_timezone_set("Asia/Jakarta");
	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="icon" href="../uploads/identitas/<?= $d->favicon ?>">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Panel - <?= $d->nama ?></title>
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>

	<script>
		tinymce.init({selector:'textarea'});
	</script>
</head>

<body class="bg-light">

	<!-- navbar -->
	<div class="navbar">
		<div class="container">
			<!-- navbar brand -->
			<h2 class="nav-brand float-left">
			<a href="<?php echo ($_SESSION['ulevel'] == 'Umum') ? 'index2.php' : 'index.php'; ?>">

					SDN 048/IX Sarang Burung
				</a>
			</h2>

			<!-- navbar menu -->
			<ul class="nav-menu float-left">
				<?php if($_SESSION['ulevel'] == 'Super Admin'){ ?>
					<li><a href="index.php">Dasboard</a></li>
					<li><a href="ekstrakulikuler.php">Ekstrakulikuler</a></li>
					<li><a href="galeri.php">Galeri</a></li>
					<li><a href="informasi.php">Informasi</a></li>
					<li>
						<a href="#">Pengaturan <i class="fa fa-caret-down"></i></a>
						<!-- sub menu -->
						<ul class="dropdown">
							<li><a href="ppdb.php">PPDB</a></li>
							<li><a href="pengguna.php">Pengguna</a></li>
							<li><a href="identitas-sekolah.php">Identitas Sekolah</a></li>
							<li><a href="tentang-sekolah.php">Tentang Sekolah</a></li>
							<li><a href="kepala-sekolah.php">Kepala Sekolah</a></li>
						</ul>
					</li>
				<?php } elseif ($_SESSION['ulevel'] == 'Umum') { ?>
					<li><a href="index2.php">Dasboard</a></li>
					<li><a href="ekstrakulikuler_user.php">Ekstrakulikuler</a></li>
					<li><a href="galeri_user.php">Galeri</a></li>
					<li><a href="informasi_user.php">Informasi</a></li>
					<li><a href="ppdb2.php">PPDB</a></li>
				<?php } ?>
				<li>
					<!-- nama Akun diubah menjadi nama yang login -->
					<a href="#"><?= $_SESSION['uname'] ?> (<?= $_SESSION['ulevel'] ?>) <i class="fa fa-caret-down"></i></a>
					<!-- sub menu -->
					<ul class="dropdown">
						<li><a href="ubah-password.php">Ubah Pasword</a></li>
						<li><a href="logout.php">Keluar</a></li>
					</ul>
				</li>
			</ul>

			<div class="clearfix"></div>
		</div>
	</div>
</body>
</html>
