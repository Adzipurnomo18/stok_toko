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

		<h3 class="text-center">Ekstrakulikuler</h3>
		
		<?php 

				$ekstrakulikuler = mysqli_query($conn, "SELECT * FROM ekstrakulikuler ORDER BY id DESC");
				if(mysqli_num_rows($ekstrakulikuler) > 0){
					while($j = mysqli_fetch_array($ekstrakulikuler)){

			 ?>

				<div class="col-4">
					<a href="detail-ekstrakulikuler.php?id=<?= $j['id'] ?>" class="thumbnail-link">
					<div class="thumbnail-box">
						<div class="thumbnail-img" style="background-image: url('uploads/ekstrakulikuler/<?= $j['gambar'] ?>');">
							
						</div>
						<div class="thumbnail-text">
							<?=$j['nama'] ?>
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