<?php
// Menangani submit form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Mengambil nilai dari formulir
    // $no_pendaftaran = $_POST['no_pendaftaran'];
    $nama_siswa = $_POST['nama_siswa'];
    $nama_panggilan = $_POST['nama_panggilan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $agama = $_POST['agama'];
    $kewarganegaraan = $_POST['kewarganegaraan'];
    $anak_nomor = $_POST['anak_nomor'];
    $jumlah_saudara = $_POST['jumlah_saudara'];
    $jumlah_saudara_tiri = $_POST['jumlah_saudara_tiri'];
    $jumlah_saudara_angkat = $_POST['jumlah_saudara_angkat'];
    $bahasa_harian = $_POST['bahasa_harian'];
    $berat_badan = $_POST['berat_badan'];
    $tinggi_badan = $_POST['tinggi_badan'];
    $gol_darah = $_POST['gol_darah'];
    $penyakit = $_POST['penyakit'];
    $alamat = $_POST['alamat'];
    $kota = $_POST['kota'];
    $no_hp = $_POST['no_hp'];
    $tempat_tinggal = $_POST['tempat_tinggal'];
    $nama_ayah = $_POST['nama_ayah'];
    $nama_ibu = $_POST['nama_ibu'];
    $pendidikan_ayah = $_POST['pendidikan_ayah'];
    $pendidikan_ibu = $_POST['pendidikan_ibu'];
    $pekerjaan_ayah_upah = $_POST['pekerjaan_ayah_upah'];
    $pekerjaan_ibu_upah = $_POST['pekerjaan_ibu_upah'];
    $nama_wali = $_POST['nama_wali'];
    $pendidikan_wali = $_POST['pendidikan_wali'];
    $hub_anak = $_POST['hub_anak'];
    $pekerjaan_wali = $_POST['pekerjaan_wali'];
    $masuk_sekolah = $_POST['masuk_sekolah'];
    $asal_anak = $_POST['asal_anak'];
    $nama_tk = $_POST['nama_tk'];
    $nomor_tsk = $_POST['nomor_tsk'];
    $lama_belajar = $_POST['lama_belajar'];
    $nama_sa = $_POST['nama_sa'];
    $tanggal_sa = $_POST['tanggal_sa'];
    $dari_kelas_sa = $_POST['dari_kelas_sa'];
    $tanggal_dsi = $_POST['tanggal_dsi'];
    $dikelas_dsi = $_POST['dikelas_dsi'];
    $id_pengguna = $_POST['id_pengguna'];

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

    // Menyimpan data ke dalam database
    $query = "INSERT INTO siswa_baru (nama_siswa, nama_panggilan, jenis_kelamin, tempat_lahir, tanggal_lahir, agama, kewarganegaraan, anak_nomor, jumlah_saudara, jumlah_saudara_tiri, jumlah_saudara_angkat, bahasa_harian, berat_badan, tinggi_badan, gol_darah, penyakit, alamat, kota, no_hp, tempat_tinggal, nama_ayah, nama_ibu, pendidikan_ayah, pendidikan_ibu, pekerjaan_ayah_upah, pekerjaan_ibu_upah, nama_wali, pendidikan_wali, hub_anak, pekerjaan_wali, masuk_sekolah, asal_anak, nama_tk, nomor_tsk, lama_belajar, nama_sa, tanggal_sa, dari_kelas_sa, tanggal_dsi, dikelas_dsi, id_pengguna) 
              VALUES ('$nama_siswa', '$nama_panggilan', '$jenis_kelamin', '$tempat_lahir', '$tanggal_lahir', '$agama', '$kewarganegaraan', '$anak_nomor', '$jumlah_saudara', '$jumlah_saudara_tiri', '$jumlah_saudara_angkat', '$bahasa_harian', '$berat_badan', '$tinggi_badan', '$gol_darah', '$penyakit', '$alamat', '$kota','$no_hp', '$tempat_tinggal', '$nama_ayah', '$nama_ibu', '$pendidikan_ayah', '$pendidikan_ibu', '$pekerjaan_ayah_upah', '$pekerjaan_ibu_upah', '$nama_wali', '$pendidikan_wali', '$hub_anak', '$pekerjaan_wali', '$masuk_sekolah', '$asal_anak', '$nama_tk', '$nomor_tsk', '$lama_belajar', '$nama_sa', '$tanggal_sa', '$dari_kelas_sa', '$tanggal_dsi', '$dikelas_dsi', (SELECT id_pengguna FROM pengguna WHERE email = 'email'))";

    if ($koneksi->query($query) === TRUE) {
        echo "<script>
                alert('Pendaftaran berhasil tunggu pemberitahuan admin via whatsapp! Oke');
                window.history.go(-2); // Kembali ke halaman sebelumnya
              </script>";
        exit(); // Keluar dari skrip PHP untuk menghentikan eksekusi lebih lanjut
    } else {
        echo "Error: " . $query . "<br>" . $koneksi->error;
    }

    // Menutup koneksi ke database
    $koneksi->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
   
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pendaftaran Siswa Baru</title>
    <style>
        body {
            font-family: 'Times New Roman', serif;
            background-color: #f2f2f2;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
         
        }

        form {
            width: 80%;
            max-width: 600px;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            margin: 20px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease-in-out;
        }


        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 20px;
            font-family: 'Georgia', serif;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
            font-family: 'Georgia', serif;
        }

        .input-control,
        select {
            width: 100%;
            padding: 12px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 16px;
            font-family: 'Georgia', serif;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            padding: 12px 20px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            font-family: 'Georgia', serif;
            transition: background-color 0.3s ease-in-out;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h2>Form Pendaftaran Siswa Baru</h2>
        
        <!-- <div class="form-group">
            <label for="no_pendaftaran">No Pendaftaran:</label>
            <input type="text" name="no_pendaftaran" placeholder="No Pendaftaran" class="input-control" required>
        </div> -->

        <div class="form-group">
            <label>A. Keterangan Siswa</label>
        </div>

        <div class="form-group">
            <label for="nama_siswa">1. Nama Lengkap:</label>
            <input type="text" name="nama_siswa" placeholder="Nama Lengkap" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="nama_panggilan">2. Nama Panggilan:</label>
            <input type="text" name="nama_panggilan" placeholder="Nama Panggilan" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="jenis_kelamin">3. Jenis Kelamin:</label>
            <select name="jenis_kelamin" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="tempat_lahir">4. Tempat Lahir:</label>
            <input type="text" name="tempat_lahir" placeholder="Tempat Lahir" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="tanggal_lahir">5. Tanggal Lahir:</label>
            <input type="date" name="tanggal_lahir" class="input-control" required>
        </div>

         <div class="form-group">
            <label for="agama">6. Agama:</label>
            <select name="agama" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="ISLAM">ISLAM</option>
                <option value="KRISTEN">KRISTEN</option>
                <option value="KATOLIK">KATOLIK</option>
                <option value="HINDU">HINDU</option>
                <option value="BUDDHA">BUDDHA</option>
                <option value="KHONGHUCU">KHONGHUCU</option>
            </select>
        </div>

        <div class="form-group">
            <label for="kewarganegaraan">7. Kewarganegaraan:</label>
            <select name="kewarganegaraan" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="WNI">Warga Negara Indonesia</option>
                <option value="WNA">Warga Negara Asing keturunan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="anak_nomor">8. Anak Nomor:</label>
            <input type="text" name="anak_nomor" placeholder="Anak Nomor" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="jumlah_saudara">9. Jumlah Saudara Kandung:</label>
            <input type="text" name="jumlah_saudara" placeholder="Jumlah Saudara Kandung" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="jumlah_saudara_tiri">10. Jumlah Saudara Tiri:</label>
            <input type="text" name="jumlah_saudara_tiri" placeholder="Jumlah Saudara Tiri" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="jumlah_saudara_angkat">11. Jumlah Saudara Angkat:</label>
            <input type="text" name="jumlah_saudara_angkat" placeholder="Jumlah Saudara Angkat" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="bahasa_harian">12. Bahasa Sehari-hari:</label>
            <input type="text" name="bahasa_harian" placeholder="Bahasa Sehari-hari" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="berat_badan">13. Berat Badan:</label>
            <input type="text" name="berat_badan" placeholder="Berat Badan" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="tinggi_badan">14. Tinggi Badan:</label>
            <input type="text" name="tinggi_badan" placeholder="Tinggi Badan" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="gol_darah">15. Golongan Darah:</label>
            <select name="gol_darah" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="A">A</option>
                <option value="B">B</option>
                <option value="AB">AB</option>
                <option value="O">O</option>
            </select>
        </div>

        <div class="form-group">
            <label for="penyakit">16. Penyakit berat yang pernah diderita :</label>
            <input type="text" name="penyakit" placeholder="Penyakit" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="alamat">17. Alamat tempat tinggal:</label>
            <input type="text" name="alamat" placeholder="Alamat" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="kota">18. Kota:</label>
            <select name="kota" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="Kota Jambi">Kota Jambi</option>
                <option value="Muaro Jambi">Muaro Jambi</option>
                <option value="Tanjab Barat">Tanjab Barat</option>
                <option value="Tanjab Tim">Tanjab Tim</option>
            </select>
        </div>

        <div class="form-group">
            <label for="no_hp">18. No HP:</label>
            <input type="text" name="no_hp" placeholder="No HP" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="tempat_tinggal">19. Bertempat tinggal pada:</label>
            <select name="tempat_tinggal" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="Orang Tua">Orang Tua</option>
                <option value="Menumpang">Menumpang</option>
                <option value="Asrama">Asrama</option>
            </select>
        </div>
        
        <div class="form-group">
            <label>B. Orang Tua/Wali</label>
        </div>

        <div class="form-group">
            <label for="nama_ayah">20. Nama Ayah Kandung:</label>
            <input type="text" name="nama_ayah" placeholder="Nama Ayah" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="nama_ibu">21. Nama Ibu Kandung:</label>
            <input type="text" name="nama_ibu" placeholder="Nama Ibu" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="pendidikan_ayah">22. Pendidikan Tertinggi Ayah:</label>
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
            <label for="pendidikan_ibu">23. Pendidikan Tertinggi Ibu:</label>
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
            <label for="pekerjaan_ayah_upah">24. Pekerjaan Ayah / Upah:</label>
            <input type="text" name="pekerjaan_ayah_upah" placeholder="Pekerjaan Ayah dan Upah" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="pekerjaan_ibu_upah">25. Pekerjaan Ibu / Upah:</label>
            <input type="text" name="pekerjaan_ibu_upah" placeholder="Pekerjaan Ibu dan Upah" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="nama_wali">26. Nama Wali Siswa:</label>
            <input type="text" name="nama_wali" placeholder="Nama Wali Siswa" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="pendidikan_wali">27. Pendidikan Tertinggi:</label>
            <select name="pendidikan_wali" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="Tidak Ada">Tidak Ada</option>
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
            <label for="hub_anak">28. Hubungan Terhadap Anak:</label>
            <input type="text" name="hub_anak" placeholder="Hubungan Terhadap Anak" class="input-control" required>
        </div>
        
         <div class="form-group">
            <label for="pekerjaan_wali">29. Pekerjaan:</label>
            <input type="text" name="pekerjaan_wali" placeholder="Pekerjaan" class="input-control" required>
        </div>

        <div class="form-group">
            <label>C. Asal Mula Anak</label>
        </div>

        <div class="form-group">
            <label for="masuk_sekolah">30. Masuk Sekolah Sebagai:</label>
            <select name="masuk_sekolah" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="Siswa_baru">Siswa baru kelas 1</option>
                <option value="pindahan">Pindahan "teruskan ke no 27"</option>
            </select>
        </div>

        <div class="form-group">
            <label for="">31.</label>
        </div>

        <div class="form-group">
            <label for="asal_anak">A. Asal Anak:</label>
            <select name="asal_anak" class="input-control" required>
            <option value="">--Pilih--</option>
                <option value="rumah_tangga">Rumah Tangga</option>
                <option value="tk">TK "teruskan ke no 32"</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nama_tk">b. Nama Taman Kanak-kanak:</label>
            <input type="text" name="nama_tk" placeholder="Nama Taman Kanak-kanak" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="nomor_tsk">c. Nomor / tahun surat keterangan:</label>
            <input type="text" name="nomor_tsk" placeholder="Nomor / tahun surat keterangan" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="lama_belajar">c. Lama belajar (Lanjut ke no 33):</label>
            <input type="text" name="lama_belajar" placeholder="Lama belajar" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="">33. Pindahan dari</label>
        </div>

        <div class="form-group">
            <label for="nama_sa">a. Nama Sekolah Asal:</label>
            <input type="text" name="nama_sa" placeholder="Nama Sekolah Asal" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="tanggal_sa">5. Tanggal:</label>
            <input type="date" name="tanggal_sa" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="dari_kelas_sa">c. Dari Kelas:</label>
            <input type="text" name="dari_kelas_sa" placeholder="Dari Kelas" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="">34. Diterima disekolah ini</label>
        </div>

        <div class="form-group">
            <label for="tanggal_dsi">5. Tanggal:</label>
            <input type="date" name="tanggal_dsi" class="input-control" required>
        </div>

        <div class="form-group">
            <label for="dikelas_dsi">b. Dikelas:</label>
            <input type="text" name="dikelas_dsi" placeholder="Tanggal" class="input-control" required>
        </div>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>
