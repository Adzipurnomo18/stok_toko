<?php
session_start();
include 'koneksi.php';

if(isset($_POST['submit'])){
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $level = mysqli_real_escape_string($conn, $_POST['level']);

    // Enkripsi password sebelum disimpan ke database
    $hashed_password = md5($password);

    // Query untuk menambahkan data ke database
    $query = "INSERT INTO pengguna (nama, username, password, level) VALUES ('$name', '$username', '$hashed_password', '$level')";
    
    if(mysqli_query($conn, $query)){
        echo '<div class="alert alert-success">Akun berhasil ditambahkan. Silakan login <a href="login.php">di sini</a></div>';
    } else {
        echo '<div class="alert alert-error">Error: ' . mysqli_error($conn) . '</div>';
    }
}
?>
