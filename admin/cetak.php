<?php
// Menghubungkan ke database (menggantinya sesuai dengan informasi database Anda)
$host = "localhost";
$user = "root";
$password = "";
$database = "db_sekolah";

$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

// Mengambil ID siswa dari parameter URL

// Mengambil data siswa dari database berdasarkan ID
$query = "SELECT siswa_baru.id_siswa, siswa_baru.nama_siswa, siswa_baru.nama_panggilan, siswa_baru.tempat_lahir, siswa_baru.alamat, tb_kota.nama_kota, siswa_baru.tanggal_lahir, siswa_baru.jenis_kelamin, siswa_baru.agama, siswa_baru.no_hp FROM siswa_baru INNER JOIN tb_kota ON siswa_baru.kota = tb_kota.nama_kota";
$stmt = $koneksi->prepare($query);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $siswa = $result->fetch_assoc();
} else {
    echo "Siswa tidak ditemukan.";
    exit;
}

// Pesan untuk ditampilkan pada pop-up setelah berhasil diedit
// Menutup koneksi ke database
$stmt->close();
$koneksi->close();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <style>
        /* CSS styling */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        form {
            width: 50%;
            margin: auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
        }

        button {
            background-color: #4caf50;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
    </style>
    <!-- JavaScript untuk menampilkan pop-up -->
</head>

<body>
    <h2>Data Siswa</h2>

    <form method="POST" action="">
        <label for="nama_siswa">Nama Siswa:</label>
        <input type="text" name="nama_siswa" value="<?= htmlspecialchars($siswa['nama_siswa']) ?>" required>

        <label for="nama_panggilan">Nama Panggilan:</label>
        <input type="text" name="nama_panggilan" value="<?= htmlspecialchars($siswa['nama_panggilan']) ?>" required>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <input type="text" name="jenis_kelamin" value="<?= htmlspecialchars($siswa['jenis_kelamin']) ?>" required>

        <label for="tempat_lahir">Tempat Lahir:</label>
        <input type="text" name="tempat_lahir" value="<?= htmlspecialchars($siswa['tempat_lahir']) ?>" required>

        <label for="tanggal_lahir">Tanggal Lahir:</label>
        <input type="date" name="tanggal_lahir" value="<?= htmlspecialchars($siswa['tanggal_lahir']) ?>" required>

        <label for="agama">Agama:</label>
        <input type="text" name="agama" value="<?= htmlspecialchars($siswa['agama']) ?>" required>

        <label for="alamat">Alamat:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($siswa['alamat']) ?>" required>

        <label for="alamat">Kota:</label>
        <input type="text" name="nama_kota" value="<?= htmlspecialchars($siswa['nama_kota']) ?>" required>

        <label for="no_hp">No HP:</label>
        <input type="text" name="no_hp" value="<?= htmlspecialchars($siswa['no_hp']) ?>" required>

        <a href="ppdb.php" target="_blank">Kembali</a>

	    <script>
		window.print();
	    </script>
       
    </form>
</body>

</html>
