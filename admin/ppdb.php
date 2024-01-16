<?php
include 'header.php';

// Menghubungkan ke database (sesuaikan dengan informasi database Anda)
$host = "localhost";
$user = "root";
$password = "";
$database = "db_sekolah";

$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

// Mengambil data siswa dari database
$query = "SELECT siswa_baru.id_siswa, siswa_baru.nama_siswa, siswa_baru.alamat, 
tb_kota.nama_kota, siswa_baru.tanggal_lahir, siswa_baru.jenis_kelamin, 
siswa_baru.agama, siswa_baru.no_hp FROM siswa_baru INNER JOIN tb_kota ON siswa_baru.kota = tb_kota.nama_kota";
$result = $koneksi->query($query);

?>

<!DOCTYPE html>
<html lang="en">

<head>
<head>
    <!-- ... (bagian lain dari head) ... -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- ... (bagian lain dari head) ... -->
</head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa Baru</title>
    <style>
        /* CSS styling (sesuaikan sesuai kebutuhan) */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
            border: 1px solid #ddd;
        }

        th,
        td {
            padding: 20px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        .action-buttons a {
            text-decoration: none;
            padding: 5px 10px;
            margin-right: 5px;
            border-radius: 4px;
        }

        .edit-button {
            background-color: #3498db;
            color: white;
        }

        .delete-button {
            background-color: #e74c3c;
            color: white;
        }

        .cetak-button {
            background-color: #3498db;
            color: white;
        }
    </style>
</head>

<body>
    <div class="content">
        <div class="container">
            <div class="box">
                <div class="box-header">
                    Dasboard
                </div>
                <div class="box-body">
                    <a href="siswa_baru.php" class="text-green"><i class="fa fa-plus"></i>Tambah Siswa Baru</a>
                </div>

                <div class="box-body">
                    <h3>Selamat datang <?= htmlspecialchars($_SESSION['uname']) ?> di Profile <?= htmlspecialchars($d->nama) ?></h3>
                </div>

                <h2>Data Siswa Baru</h2>

                <?php
                // Periksa apakah query berhasil dieksekusi
                if ($result === false) {
                    echo "Error executing query: " . $koneksi->error;
                } else {
                    // Periksa apakah ada data siswa
                    if ($result->num_rows > 0) {
                        echo "<table>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Siswa</th>
                                    <th>Alamat</th>
                                    <th>Kota</th>
                                    <th>Tanggal Lahir</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Agama</th>
                                    <th>Nomor HP</th>
                                    <th>Action</th>
                                </tr>";

                        $nomor = 1; // Inisialisasi nomor urut

                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>
                                    <td>" . $nomor . "</td>
                                    <td>" . htmlspecialchars($row['nama_siswa']) . "</td>
                                    <td>" . htmlspecialchars($row['alamat']) . "</td>
                                    <td>" . htmlspecialchars($row['nama_kota']) . "</td>
                                    <td>" . htmlspecialchars($row['tanggal_lahir']) . "</td>
                                    <td>" . htmlspecialchars($row['jenis_kelamin']) . "</td>
                                    <td>" . htmlspecialchars($row['agama']) . "</td>
                                    <td>" . htmlspecialchars($row['no_hp']) . "</td>
                                    <td class='action-buttons'>
                                        <a href='edit_siswa.php?id_siswa=" . $row['id_siswa'] . "' class='edit-button'><i class='fas fa-edit'></i></a><br><br>
                                        <a href='hapus_siswa.php?id_siswa=" . $row['id_siswa'] . "' class='delete-button' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'><i class='fas fa-trash'></i></a><br><br>
                                        <a href='cetak.php?id_siswa=" . $row['id_siswa'] . "' class='cetak-button'><i class='fas fa-print'></i></a>
                                    </td>
                                </tr>";
                        
                            $nomor++; // Increment nomor urut
                        }
                        
                        

                        echo "</table>";
                    } else {
                        echo "Tidak ada data siswa terdaftar.";
                    }
                }

                // Menutup koneksi ke database
                $koneksi->close();
                ?>
            </div>
        </div>
    </div>
</body>

</html>

<?php include 'footer.php'; ?>
