<?php include 'header.php'; ?>

<div class="section">

	<div class="container">

		<?php 
			$ekstrakulikuler = mysqli_query($conn, "SELECT * FROM ekstrakulikuler WHERE id = '".$_GET['id']."' ");

			if (mysqli_num_rows($ekstrakulikuler) == 0) {
				echo "<script>window.location='index.php'</script>";
			}

			$p        = mysqli_fetch_object($ekstrakulikuler);
		 ?>

		<h3 class="text-center"><?= $p->nama ?></h3>
		<img src="uploads/ekstrakulikuler/<?= $p->gambar ?>" width="100%" class="image">
		<?= $p->keterangan ?>
	</div>
	
</div>

<?php include 'footer.php'; ?>