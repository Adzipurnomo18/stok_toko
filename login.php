<?php
  session_start();
  include 'koneksi.php';

  // Cek apakah pengguna sudah login
  if (isset($_SESSION['status_login']) && $_SESSION['status_login']) {
    // Jika sudah login, arahkan ke halaman sesuai dengan level pengguna
    header('Location: ' . ($_SESSION['ulevel'] == 'Umum' ? 'admin/index2.php' : 'admin/index.php'));
    exit();
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Halaman Login</title>
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
  <!-- page login -->
  <div class="page-login">

    <!-- box -->
    <div class="box box-login">
 
      <!-- box header -->
      <div class="box-header text-center">
        Silahkan Login Untuk Mendaftar
      </div>

      <!-- box body -->
      <div class="box-body">
        <?php 
          if (isset($_GET['msg'])) {
            echo "<div class='alert alert-error'>" . $_GET['msg'] . "</div>";
          }
        ?>
        
        <!-- form login -->
        <form action="" method="POST">
          <div class="form-group">
            <label>Username</label>
            <input type="text" name="user" placeholder="Username" class="input-control">
          </div>
          <div class="form-group">
            <label>Password</label>
            <input type="password" name="pass" placeholder="Password" class="input-control">
          </div>

          <input type="submit" name="submit" value="Login" class="btn">
        </form>

        <?php 
          if (isset($_POST['submit'])) {
            $user = mysqli_real_escape_string($conn, $_POST['user']);
            $pass = mysqli_real_escape_string($conn, $_POST['pass']);

            $cek = mysqli_query($conn, "SELECT * FROM pengguna WHERE username = '".$user."' ");
            if (mysqli_num_rows($cek) > 0) {
              $d = mysqli_fetch_object($cek);
              if (md5($pass) == $d->password) {
                $_SESSION['status_login'] = true;
                $_SESSION['uid'] = $d->id;
                $_SESSION['uname'] = $d->nama;
                $_SESSION['ulevel'] = $d->level;

                header('Location: ' . ($_SESSION['ulevel'] == 'Umum' ? 'admin/index2.php' : 'admin/index.php'));
                exit();
              } else {
                echo '<div class="alert alert-error">Password salah</div>';
              }
            } else {
              echo '<div class="alert alert-error">Username tidak ditemukan</div>';
            }
          }
        ?>
      </div>

      <!-- box footer -->
      <div class="box-footer text-center">
        <a href="index.php">Halaman Utama</a>
        <p> Belum Punya Akun? <a href="register.php">Daftar Disini</a></p>
      </div>
    </div>
  </div>
</body>
</html>
