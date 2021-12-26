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
$user_login =mysqli_query($koneksi , "SELECT * FROM user_login WHERE username='$username' AND password='$password' AND kode_user ='$kode_user'");
//  var_dump($user_login);
//  die();
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($user_login);
 
if($cek === 1){
	$data = mysqli_fetch_assoc($user_login);
	$_SESSION['kode_user'] = $data['kode_user'];
	$_SESSION['username'] = $data['username'];
	$_SESSION['status'] = "login";
	header("location:user/index.php");
}else{
	header("location:index.php?pesan=gagal");
}
