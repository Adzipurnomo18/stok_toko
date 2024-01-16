<?php include 'header.php'; ?>

<div class="section">

	<div class="container">

		<h3 class="text-center">Kontak</h3>
		
		<div class="col-4">
			<p style="margin-bottom: 10px;"><b>Alamat :</b> <br><?= $d->alamat ?></p>
			<p style="margin-bottom: 10px;"><b>Telepon :</b> <br><?= $d->telepon ?></p>
			<p style="margin-bottom: 10px;"><b>Email :</b> <br><?= $d->email ?></p>
		</div>

		<div class="box-gmaps">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.3241509655695!2d103.5225951741343!3d-1.5681028359973168!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e2f6216a0de1307%3A0x99130c6a83e8c627!2sSD%20Negeri%2048%20%2F%20IX%20Sarang%20Burung!5e0!3m2!1sid!2sid!4v1699365636624!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div>
		
	</div>
	
</div>

<?php include 'footer.php'; ?>
