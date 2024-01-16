<?php include 'header.php' ?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Dasboard
            </div>
            <!-- <div class="box-body">
                <a href="siswa_baru.php" class="text-green"><i class="fa fa-plus"></i>Tambah Siswa Baru</a>
            </div> -->

            <div class="box-body">
                <h3>Selamat datang <?= $_SESSION['uname'] ?> di Profile <?= $d->nama ?></h3>
            </div>

            <!-- <?php
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

            // Mengambil data siswa dari database
            $query = "SELECT * FROM siswa_baru";
            $result = $koneksi->query($query);

            // Menutup koneksi ke database (pindahkan ke akhir setelah penggunaan $result)
            // $koneksi->close();
            ?>

            <!DOCTYPE html>
            <html lang="en">

            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
				<br>
                <title>Data Siswa Baru</title>
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
                        padding: 10px;
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
                </style>
            </head>

            <body>
                <h2>Data Siswa Baru</h2>

                <?php
                if ($result->num_rows > 0) {
                    echo "<table>
                            <tr>
                                <th>Nama Siswa</th>
                                <th>Jenis Kelamin</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th>No HP</th>
                                <th>Email</th>
                                <th>Action</th>
                            </tr>";

							while ($row = $result->fetch_assoc()) {
								echo "<tr>
										<td>" . $row['nama_siswa'] . "</td>
										<td>" . $row['jenis_kelamin'] . "</td>
										<td>" . $row['tempat_lahir'] . "</td>
										<td>" . $row['tanggal_lahir'] . "</td>
										<td>" . $row['alamat'] . "</td>
										<td>" . $row['no_hp'] . "</td>
										<td>" . $row['email'] . "</td>
										<td class='action-buttons'>
											<a href='edit_siswa.php?id=" . $row['id'] . "' class='edit-button'>Edit</a>
											<a href='hapus_siswa.php?id=" . $row['id'] . "' class='delete-button' onclick='return confirm(\"Apakah Anda yakin ingin menghapus?\")'>Hapus</a>
										</td>
									</tr>";
							}

                    echo "</table>";
                } else {
                    echo "Tidak ada data siswa terdaftar.";
                }

                // Menutup koneksi ke database (pindahkan ke sini)
                $koneksi->close();
                ?> -->
            </body>

            </html>

        </div>
    </div>
</div>

<?php include 'footer.php' ?>
