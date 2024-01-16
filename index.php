<?php include 'header.php'; ?>

<style>
    /* Global Styles */
    body {
        font-family: 'Arial', sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f9f9f9;
        color: #333;
    }

    .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    /* Banner Styles */
    .banner {
        height: 550px;
        background-size: cover;
        background-position: center;
        position: relative;
        color: #000000;
        display: flex;
        align-items: flex-end;
        justify-content: center;
        text-align: center;
    }

    .banner h3 {
        font-size: 2.5em;
        margin-bottom: 10px;
    }

    /* Section Styles */
    .section {
        padding: 50px 0;
    }

    .section-title {
        margin-bottom: 30px;
    }

    /* Thumbnail Styles */
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
        height: 300px;
        background-size: cover;
        background-position: center;
    }

    .thumbnail-text {
        padding: 15px;
        text-align: center;
        background-color: rgba(255, 255, 255, 0.9);
        border-radius: 0 0 8px 8px;
    }
</style>

<!-- Bagian Banner -->
<div class="banner" style="background-image: url('uploads/identitas/<?= $d->foto_sekolah ?>');">
    <div class="container">
        <h3>Selamat Datang di <?= $d->nama ?></h3>
        <p>Menjadi tempat belajar yang menyenangkan dan inspiratif</p>
    </div>
</div>

<!-- Bagian Sambutan -->
<div class="section">
    <div class="container text-center">
        <h3 class="section-title">Sambutan Kepala Sekolah</h3>
        <img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="100px" alt="<?= $d->nama_kepsek ?>">
        <h4><i class="fas fa-user"></i> <?= $d->nama_kepsek ?></h4>
        <p><?= $d->sambutan_kepsek ?></p>
    </div>
</div>

<!-- Bagian Ekstrakulikuler -->
<div class="section" id="ekstrakulikuler">
    <div class="container text-center">
        <h3 class="section-title">Ekstrakulikuler</h3>
        <?php
        $ekstrakulikuler = mysqli_query($conn, "SELECT * FROM ekstrakulikuler ORDER BY id DESC");
        if (mysqli_num_rows($ekstrakulikuler) > 0) {
            while ($j = mysqli_fetch_array($ekstrakulikuler)) {
        ?>
                <div class="col-4">
                    <a href="detail-ekstrakulikuler.php?id=<?= $j['id'] ?>" class="thumbnail-link">
                        <div class="thumbnail-box">
                            <div class="thumbnail-img" style="background-image: url('uploads/ekstrakulikuler/<?= $j['gambar'] ?>');"></div>
                            <div class="thumbnail-text"><?= $j['nama'] ?></div>
                        </div>
                    </a>
                </div>
        <?php
            }
        } else {
        ?>
            Tidak ada data
        <?php
        }
        ?>
    </div>
</div>

<!-- Bagian Informasi -->
<!-- <div class="section">
    <div class="container text-center">
        <h3 class="section-title">Informasi Terbaru</h3>
        <?php
        $informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
        if (mysqli_num_rows($informasi) > 0) {
            while ($p = mysqli_fetch_array($informasi)) {
        ?>
                <div class="col-4">
                    <a href="detail-informasi.php?id=<?= $p['id'] ?>" class="thumbnail-link">
                        <div class="thumbnail-box">
                            <div class="thumbnail-img" style="background-image: url('uploads/informasi/<?= $p['gambar'] ?>');"></div>
                            <div class="thumbnail-text"><?= substr($p['judul'], 0, 50) ?></div>
                        </div>
                    </a>
                </div>
        <?php
            }
        } else {
        ?>
            Tidak ada data
        <?php
        }
        ?>
    </div>
</div> -->

<?php include 'footer.php'; ?>
