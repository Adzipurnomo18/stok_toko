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
$id_siswa = $_GET['id_siswa'];

// Menghapus data siswa dari database
$delete_query = "DELETE FROM siswa_baru WHERE id_siswa = $id_siswa";

if ($koneksi->query($delete_query) === TRUE) {
    echo "Data siswa berhasil dihapus.";
} else {
    echo "Error: " . $delete_query . "<br>" . $koneksi->error;
}

// Menutup koneksi ke database
$koneksi->close();
?>

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Siswa</title>
    <script>
        // Fungsi untuk kembali ke halaman indeks setelah menekan OK pada pop-up
        function redirectToIndex() {
            window.location.href = 'ppdb.php';
        }

        // Tampilkan pesan dan arahkan ke halaman indeks setelah selesai menghapus
        alert("Data siswa berhasil dihapus.");
        redirectToIndex();
    </script>
</head>

<body>
    <!-- Tidak perlu konten HTML pada halaman ini -->
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hapus Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            text-align: center;
            margin: 50px;
        }

        .success-message {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            border-radius: 5px;
        }

        .redirect-message {
            margin-top: 20px;
            color: #333;
        }
    </style>
</head>

<body>
    <div class="success-message">
        <h2>Data siswa berhasil dihapus!</h2>
    </div>
    <div class="redirect-message">
        <p>Anda akan dialihkan ke halaman utama dalam beberapa detik...</p>
    </div>

    <script>
        // Fungsi untuk kembali ke halaman indeks setelah menekan OK pada pop-up
        function redirectToIndex() {
            window.location.href = 'ppdb.php';
        }

        // Tampilkan pesan dan arahkan ke halaman indeks setelah selesai menghapus
        setTimeout(function () {
            redirectToIndex();
        }, 3000); // Redirect setelah 3 detik
    </script>
</body>

</html>

