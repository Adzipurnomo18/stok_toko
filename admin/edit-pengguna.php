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

$id_pengguna = isset($_GET['id_pengguna']) ? $koneksi->real_escape_string($_GET['id_pengguna']) : '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Formulir sudah dikirim, lakukan update data
    $email = $koneksi->real_escape_string($_POST['email']);
    $username = $koneksi->real_escape_string($_POST['username']);
    $level = $koneksi->real_escape_string($_POST['level']);

    // Lakukan UPDATE
    $update = $koneksi->query("UPDATE pengguna SET
            email = '$email',
            username = '$username',
            level = '$level'
            WHERE id_pengguna = '$id_pengguna'
        ");

    if ($update) {
        echo "<script>window.location='pengguna.php?success=Edit Data Berhasil'</script>";
        exit; // Penting untuk menghentikan eksekusi script setelah mengarahkan ke halaman lain
    } else {
        echo 'Gagal Edit: ' . $koneksi->error;
    }
}

// Formulir belum dikirim, ambil data pengguna
$pengguna = $koneksi->query("SELECT * FROM pengguna WHERE id_pengguna = '$id_pengguna'");
$p = $pengguna->fetch_assoc();

?>

<!-- content -->
<div class="content">
    <div class="container">
        <div class="box">
            <div class="box-header">
                Edit Pengguna
            </div>
            <div class="box-body">
                <form action="" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="email" placeholder="Email" class="input-control" value="<?= isset($p['email']) ? $p['email'] : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="Username" class="input-control" value="<?= isset($p['username']) ? $p['username'] : '' ?>" required>
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" class="input-control" required>
                            <option value="">Pilih</option>
                            <option value="Super Admin" <?= ($p['level'] == 'Super Admin') ? 'selected' : '' ?>>Super Admin</option>
                            <option value="Umum" <?= ($p['level'] == 'Umum') ? 'selected' : '' ?>>Umum</option>
                        </select>
                    </div>
                    <button type="button" class="btn" onclick="window.location = 'pengguna.php'">Kembali</button>
                    <input type="submit" value="Simpan" class="btn btn-blue">
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
