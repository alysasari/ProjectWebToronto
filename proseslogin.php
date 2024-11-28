<?php
session_start();
// menghubungkan dengan koneksi
$query=new mysqli('localhost', 'root', '', 'kampusdb');

// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];

// menyeleksi data admin dengan username dan password yang sesuai
$data = mysqli_query($query, "SELECT * from user");

// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($data);
if($cek > 0) {
    $_SESSION['username']   = $username;
    $_SESSION['status']     = "login";
    header("location:menuutama.php");
}else {
    header("location:login.php?pesan=gagal");
}
?>