<?php include 'header.php'; ?>

<style>
    /* Section Styles */
    .section {
        padding: 50px 0;
    }

    /* Ekstrakulikuler & Informasi Styles */
    .thumbnail-link {
        text-decoration: none;
        color: #333;
    }

    .thumbnail-box {
        position: relative;
        overflow: hidden;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out;
    }

    .thumbnail-box:hover {
        transform: scale(1.05);
    }

    .thumbnail-img {
        height: 300px; /* Sesuaikan dengan tinggi yang diinginkan */
        background-size: cover;
        background-position: center;
    }

    .thumbnail-text {
        padding: 15px;
        text-align: center;
    }
</style>

<div class="section">

	<div class="container">

		<h3 class="text-center">Informasi</h3>
		
		<?php 

				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC");
				if(mysqli_num_rows($informasi) > 0){
					while ($p = mysqli_fetch_array($informasi)) {

			 ?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbnail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');">
							
						</div>
						<div class="thumbnail-text">
							<?=substr($p['judul'], 0, 50) ?>
						</div>
					</div>
					</a>
				</div>

				<?php }}else{ ?>

					Tidak ada data

				<?php } ?>
		
	</div>
	
</div>

<?php include 'footer.php'; ?>