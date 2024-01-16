<?php include 'header.php'; ?>

<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_sekolah";

$koneksi = new mysqli($host, $user, $password, $database);

// Memeriksa koneksi
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error);
}

$id_siswa = isset($_GET['id_siswa']) ? $_GET['id_siswa'] : '';

$query = "SELECT * FROM siswa_baru WHERE id_siswa = ?";
$stmt = $koneksi->prepare($query);
$stmt->bind_param("i", $id_siswa);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $siswa = $result->fetch_assoc();
} else {
    echo "Siswa tidak ditemukan.";
    exit;
}

$success_message = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nama_siswa = htmlspecialchars($_POST['nama_siswa']);
    $nama_panggilan = htmlspecialchars($_POST['nama_panggilan']);
    $jenis_kelamin = htmlspecialchars($_POST['jenis_kelamin']);
    $tempat_lahir = htmlspecialchars($_POST['tempat_lahir']);
    $tanggal_lahir = htmlspecialchars($_POST['tanggal_lahir']);
    $agama = htmlspecialchars($_POST['agama']);
    $kewarganegaraan = htmlspecialchars($_POST['kewarganegaraan']);
    $anak_nomor = htmlspecialchars($_POST['anak_nomor']);
    $jumlah_saudara = htmlspecialchars($_POST['jumlah_saudara']);
    $jumlah_saudara_tiri = htmlspecialchars($_POST['jumlah_saudara_tiri']);
    $jumlah_saudara_angkat = htmlspecialchars($_POST['jumlah_saudara_angkat']);
    $bahasa_harian = htmlspecialchars($_POST['bahasa_harian']);
    $berat_badan = htmlspecialchars($_POST['berat_badan']);
    $tinggi_badan = htmlspecialchars($_POST['tinggi_badan']);
    $gol_darah = htmlspecialchars($_POST['gol_darah']);
    $penyakit = htmlspecialchars($_POST['penyakit']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $kota = htmlspecialchars($_POST['kota']);
    $no_hp = htmlspecialchars($_POST['no_hp']);
    $tempat_tinggal = htmlspecialchars($_POST['tempat_tinggal']);
    $nama_ayah = htmlspecialchars($_POST['nama_ayah']);
    $nama_ibu = htmlspecialchars($_POST['nama_ibu']);
    $pendidikan_ayah = htmlspecialchars($_POST['pendidikan_ayah']);
    $pendidikan_ibu = htmlspecialchars($_POST['pendidikan_ibu']);
    $pekerjaan_ayah_upah = htmlspecialchars($_POST['pekerjaan_ayah_upah']);
    $pekerjaan_ibu_upah = htmlspecialchars($_POST['pekerjaan_ibu_upah']);
    $nama_wali = htmlspecialchars($_POST['nama_wali']);
    $pendidikan_wali = htmlspecialchars($_POST['pendidikan_wali']);
    $hub_anak = htmlspecialchars($_POST['hub_anak']);
    $pekerjaan_wali = htmlspecialchars($_POST['pekerjaan_wali']);
    $masuk_sekolah = htmlspecialchars($_POST['masuk_sekolah']);
    $asal_anak = htmlspecialchars($_POST['asal_anak']);
    $nama_tk = htmlspecialchars($_POST['nama_tk']);
    $nomor_tsk = htmlspecialchars($_POST['nomor_tsk']);
    $lama_belajar = htmlspecialchars($_POST['lama_belajar']);
    $nama_sa = htmlspecialchars($_POST['nama_sa']);
    $tanggal_sa = htmlspecialchars($_POST['tanggal_sa']);
    $dari_kelas_sa = htmlspecialchars($_POST['dari_kelas_sa']);
    $tanggal_dsi = htmlspecialchars($_POST['tanggal_dsi']);
    $dikelas_dsi = htmlspecialchars($_POST['dikelas_dsi']);

    $update_query = "UPDATE siswa_baru SET
        nama_siswa = ?,
        nama_panggilan = ?,
        jenis_kelamin = ?,
        tempat_lahir = ?,
        tanggal_lahir = ?,
        agama = ?,
        kewarganegaraan = ?,
        anak_nomor = ?,
        jumlah_saudara = ?,
        jumlah_saudara_tiri = ?,
        jumlah_saudara_angkat = ?,
        bahasa_harian = ?,
        berat_badan = ?,
        tinggi_badan = ?,
        gol_darah = ?,
        penyakit = ?,
        alamat = ?,
        kota = ?,
        no_hp = ?,
        tempat_tinggal = ?,
        nama_ayah = ?,
        nama_ibu = ?,
        pendidikan_ayah = ?,
        pendidikan_ibu = ?,
        pekerjaan_ayah_upah = ?,
        pekerjaan_ibu_upah = ?,
        nama_wali = ?,
        pendidikan_wali = ?,
        hub_anak = ?,
        pekerjaan_wali = ?,
        masuk_sekolah = ?,
        asal_anak = ?,
        nama_tk = ?,
        nomor_tsk = ?,
        lama_belajar = ?,
        nama_sa = ?,
        tanggal_sa = ?,
        dari_kelas_sa = ?,
        tanggal_dsi = ?,
        dikelas_dsi = ?
        WHERE id_siswa = ?";

    $stmt_update = $koneksi->prepare($update_query);

    if ($stmt_update === false) {
        echo "Error: " . $koneksi->error;
        exit;
    }

    $stmt_update->bind_param(
        "ssssssssiiisssssssssssssssssssssssssssssssssssssssiiisssssssssiiissssssssi",
        $nama_siswa, $nama_panggilan, $jenis_kelamin, $tempat_lahir, $tanggal_lahir, $agama, $kewarganegaraan,
        $anak_nomor, $jumlah_saudara, $jumlah_saudara_tiri, $jumlah_saudara_angkat, $bahasa_harian, $berat_badan,
        $tinggi_badan, $gol_darah, $penyakit, $alamat, $kota, $no_hp, $tempat_tinggal, $nama_ayah, $nama_ibu,
        $pendidikan_ayah, $pendidikan_ibu, $pekerjaan_ayah_upah, $pekerjaan_ibu_upah, $nama_wali, $pendidikan_wali,
        $hub_anak, $pekerjaan_wali, $masuk_sekolah, $asal_anak, $nama_tk, $nomor_tsk, $lama_belajar, $nama_sa,
        $tanggal_sa, $dari_kelas_sa, $tanggal_dsi, $dikelas_dsi, $id_siswa
    );

    

    if ($stmt_update->execute()) {
        $success_message = "Data siswa berhasil diupdate.";
        echo "<script>alert('$success_message'); window.location.href = 'ppdb.php';</script>";
    } else {
        echo "Error: " . $stmt_update->error;
    }

    $stmt_update->close();
}

$stmt->close();
$koneksi->close();
?>
<!-- ... (HTML styling dan form) ... -->

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
    <script>
        <?php
        if (!empty($success_message)) {
            echo "alert('$success_message');";
            echo "window.location.href = 'ppdb.php';";
        }
        ?>
    </script>
</head>

<body>
    <h2>Edit Data Siswa</h2>

    <form method="POST" action="">
<div class="form-group">
    <label for="nama_siswa">1. Nama Siswa:</label>
    <input type="text" name="nama_siswa" value="<?= htmlspecialchars($siswa['nama_siswa']) ?>" class="input-control" required>
</div>
<div class="form-group">
    <label for="nama_panggilan">2. Nama Panggilan:</label>
    <input type="text" name="nama_panggilan" value="<?= htmlspecialchars($siswa['nama_panggilan']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="jenis_kelamin">3. Jenis Kelamin:</label>
    <select name="jenis_kelamin" class="input-control" required>
        
    
<option value="L" <?= ($siswa['jenis_kelamin'] == 'L') ? 'selected' : '' ?>>Laki-Laki</option>
        <option value="P" <?= ($siswa['jenis_kelamin'] == 'P') ? 'selected' : '' ?>>Perempuan</option>
    </select>
</div>

<div class="form-group">
    <label for="tempat_lahir">4. Tempat Lahir:</label>
    <input type="text" name="tempat_lahir" value="<?= htmlspecialchars($siswa['tempat_lahir']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="tanggal_lahir">5. Tanggal Lahir:</label>
    <input type="date" name="tanggal_lahir" value="<?= htmlspecialchars($siswa['tanggal_lahir']) ?>" class="input-control" required>
</div>



<div class="form-group">
    <label for="agama">6. Agama:</label>
    <input type="text" name="agama" value="<?= htmlspecialchars($siswa['agama']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="kewarganegaraan">7. Kewarganegaraan:</label>
    <select name="kewarganegaraan" class="input-control" required>
        <option value="WNI" <?= ($siswa['kewarganegaraan'] == 'WNI') ? 'selected' : '' ?>>Warga Negara Indonesia</option>
        <option value="WNA" <?= ($siswa['kewarganegaraan'] == 'WNA') ? 'selected' : '' ?>>Warga Negara Asing keturunan</option>
    </select>
</div>

<div class="form-group">
    <label for="anak_nomor">8. Anak Nomor:</label>
    <input type="text" name="anak_nomor" value="<?= htmlspecialchars($siswa['anak_nomor']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="jumlah_saudara">9. Jumlah Saudara Kandung:</label>
    <input type="text" name="jumlah_saudara" value="<?= htmlspecialchars($siswa['jumlah_saudara']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="jumlah_saudara_tiri">10. Jumlah Saudara Tiri:</label>
    <input type="text" name="jumlah_saudara_tiri" value="<?= htmlspecialchars($siswa['jumlah_saudara_tiri']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="jumlah_saudara_angkat">11. Jumlah Saudara Angkat:</label>
    <input type="text" name="jumlah_saudara_angkat" value="<?= htmlspecialchars($siswa['jumlah_saudara_angkat']) ?>" class="input-control" required>
</div>

<div class="form-group">
        <label for="bahasa_harian">12. Bahasa Sehari-hari:</label>
        <input type="text" name="bahasa_harian" value="<?= htmlspecialchars($siswa['bahasa_harian']) ?>" class="input-control" required>
    </div>

    <div class="form-group">
        <label for="berat_badan">13. Berat Badan:</label>
        <input type="text" name="berat_badan" value="<?= htmlspecialchars($siswa['berat_badan']) ?>" class="input-control" required>
    </div>

    <div class="form-group">
        <label for="tinggi_badan">14. Tinggi Badan:</label>
        <input type="text" name="tinggi_badan" value="<?= htmlspecialchars($siswa['tinggi_badan']) ?>" class="input-control" required>
    </div>

    <div class="form-group">
        <label for="gol_darah">15. Golongan Darah:</label>
        <select name="gol_darah" class="input-control" required>
            <option value="A" <?= ($siswa['gol_darah'] == 'A') ? 'selected' : '' ?>>A</option>
            <option value="B" <?= ($siswa['gol_darah'] == 'B') ? 'selected' : '' ?>>B</option>
            <option value="AB" <?= ($siswa['gol_darah'] == 'AB') ? 'selected' : '' ?>>AB</option>
            <option value="O" <?= ($siswa['gol_darah'] == 'O') ? 'selected' : '' ?>>O</option>
        </select>
    </div>

    <div class="form-group">
        <label for="penyakit">16. Penyakit berat yang pernah diderita :</label>
        <input type="text" name="penyakit" value="<?= htmlspecialchars($siswa['penyakit']) ?>" class="input-control" required>
    </div>

    <div class="form-group">
        <label for="alamat">17. Alamat tempat tinggal:</label>
        <input type="text" name="alamat" value="<?= htmlspecialchars($siswa['alamat']) ?>" class="input-control" required>
    </div>

    <div class="form-group">
        <label for="kota">18. Kota:</label>
        <select name="kota" class="input-control" required>
            
   
<option value="Kota Jambi" <?= ($siswa['kota'] == 'Kota Jambi') ? 'selected' : '' ?>>Kota Jambi</option>
            <option value="Muaro Jambi" <?= ($siswa['kota'] == 'Muaro Jambi') ? 'selected' : '' ?>>Muaro Jambi</option>
            <option value="Tanjab Barat" <?= ($siswa['kota'] == 'Tanjab Barat') ? 'selected' : '' ?>>Tanjab Barat</option>
            
        
<option value="Tanjab Tim" <?= ($siswa['kota'] == 'Tanjab Tim') ? 'selected' : '' ?>>Tanjab Tim</option>
        </select>
    </div>

    <div class="form-group">
        <label for="no_hp">19. No HP:</label>
        
       
<input type="text" name="no_hp" value="<?= htmlspecialchars($siswa['no_hp']) ?>" class="input-control" required>
    </div>

    <div class="form-group">
        <label for="tempat_tinggal">20. Bertempat tinggal pada:</label>
        <select name="tempat_tinggal" class="input-control" required>
            <option value="Orang Tua" <?= ($siswa['tempat_tinggal'] == 'Orang Tua') ? 'selected' : '' ?>>Orang Tua</option>
            <option value="Menumpang" <?= ($siswa['tempat_tinggal'] == 'Menumpang') ? 'selected' : '' ?>>Menumpang</option>
            <option value="Asrama" <?= ($siswa['tempat_tinggal'] == 'Asrama') ? 'selected' : '' ?>>Asrama</option>

<div class="form-group">
    <label>B. Orang Tua/Wali</label>
</div>

<div class="form-group">
    <label for="nama_ayah">21. Nama Ayah Kandung:</label>
    <input type="text" name="nama_ayah" value="<?= htmlspecialchars($siswa['nama_ayah']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="nama_ibu">22. Nama Ibu Kandung:</label>
    <input type="text" name="nama_ibu" value="<?= htmlspecialchars($siswa['nama_ibu']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="pendidikan_ayah">23. Pendidikan Tertinggi Ayah:</label>
    <select name="pendidikan_ayah" class="input-control" required>
    <option value="">--Pilih--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
    </select>
</div>

<div class="form-group">
    <label for="pendidikan_ibu">24. Pendidikan Tertinggi Ibu:</label>
    <select name="pendidikan_ibu" class="input-control" required>
    <option value="">--Pilih--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
    </select>
</div>

<div class="form-group">
    <label for="pekerjaan_ayah_upah">25. Pekerjaan Ayah / Upah:</label>
    <input type="text" name="pekerjaan_ayah_upah" value="<?= htmlspecialchars($siswa['pekerjaan_ayah_upah']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="pekerjaan_ibu_upah">26. Pekerjaan Ibu / Upah:</label>
    <input type="text" name="pekerjaan_ibu_upah" value="<?= htmlspecialchars($siswa['pekerjaan_ibu_upah']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="nama_wali">27. Nama Wali Siswa:</label>
    <input type="text" name="nama_wali" value="<?= htmlspecialchars($siswa['nama_wali']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="pendidikan_wali">28. Pendidikan Tertinggi:</label>
    <select name="pendidikan_wali" class="input-control" required>
    <option value="">--Pilih--</option>
                <option value="SD">SD</option>
                <option value="SMP">SMP</option>
                <option value="SMA">SMA</option>
                <option value="D1">D1</option>
                <option value="D2">D2</option>
                <option value="D3">D3</option>
                <option value="D4">D4</option>
                <option value="S1">S1</option>
                <option value="S2">S2</option>
    </select>
</div>

<div class="form-group">
    <label for="hub_anak">29. Hubungan Terhadap Anak:</label>
    <input type="text" name="hub_anak" value="<?= htmlspecialchars($siswa['hub_anak']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="pekerjaan_wali">30. Pekerjaan:</label>
    <input type="text" name="pekerjaan_wali" value="<?= htmlspecialchars($siswa['pekerjaan_wali']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label>C. Asal Mula Anak</label>
</div>

<div class="form-group">
    <label for="masuk_sekolah">31. Masuk Sekolah Sebagai:</label>
    <select name="masuk_sekolah" class="input-control" required>
        <option value="Siswa_baru" <?= ($siswa['masuk_sekolah'] == 'Siswa_baru') ? 'selected' : '' ?>>Siswa baru kelas 1</option>
        <option value="pindahan" <?= ($siswa['masuk_sekolah'] == 'pindahan') ? 'selected' : '' ?>>Pindahan "teruskan ke no 27"</option>
    </select>
</div>

<div class="form-group">
    <label for="asal_anak">32. A. Asal Anak:</label>
    <select name="asal_anak" class="input-control" required>
        <option value="rumah_tangga" <?= ($siswa['asal_anak'] == 'rumah_tangga') ? 'selected' : '' ?>>Rumah Tangga</option>
        <option value="tk" <?= ($siswa['asal_anak'] == 'tk') ? 'selected' : '' ?>>TK "teruskan ke no 33"</option>
    </select>
</div>

<div class="form-group">
    <label for="nama_tk">33. b. Nama Taman Kanak-kanak:</label>
    <input type="text" name="nama_tk" value="<?= htmlspecialchars($siswa['nama_tk']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="nomor_tsk">34. c. Nomor Telepon Taman Kanak-kanak:</label>
    <input type="text" name="nomor_tsk" value="<?= htmlspecialchars($siswa['nomor_tsk']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="lama_belajar">35. d. Lama Belajar di Taman Kanak-kanak:</label>
    <input type="text" name="lama_belajar" value="<?= htmlspecialchars($siswa['lama_belajar']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="nama_sa">36. a. Nama Sekolah Awal:</label>
    <input type="text" name="nama_sa" value="<?= htmlspecialchars($siswa['nama_sa']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="tanggal_sa">37. b. Tanggal masuk Sekolah Awal:</label>
    <input type="date" name="tanggal_sa" value="<?= htmlspecialchars($siswa['tanggal_sa']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="dari_kelas_sa">38. c. Dari Kelas:</label>
    <input type="text" name="dari_kelas_sa" value="<?= htmlspecialchars($siswa['dari_kelas_sa']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="tanggal_dsi">39. d. Tanggal masuk di Dwi Segi Islam:</label>
    <input type="date" name="tanggal_dsi" value="<?= htmlspecialchars($siswa['tanggal_dsi']) ?>" class="input-control" required>
</div>

<div class="form-group">
    <label for="dikelas_dsi">40. e. Masuk di kelas:</label>
    <input type="text" name="dikelas_dsi" value="<?= htmlspecialchars($siswa['dikelas_dsi']) ?>" class="input-control" required>
</div>

<button type="submit">Update Data</button>

</form>

</select>
    </div>
