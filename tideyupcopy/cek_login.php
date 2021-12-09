<?php 
// mengaktifkan session php
session_start();
 
// menghubungkan dengan koneksi
include 'koneksi.php';
 
// menangkap data yang dikirim dari form
$username = $_POST['username'];
$password = $_POST['password'];
$kode_user = $_POST['kode_user'];
 
// menyeleksi data admin dengan username dan password yang sesuai
$user_login = mysqli_query($koneksi,"select * from user_login where username='$username', password='$password', kode_user='$kode_user'");
 
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($user_login);
 
if($cek > 0){
	$_SESSION['kode_user'] = $kode_user;
	$_SESSION['status'] = "login";
	header("location:user/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
?>