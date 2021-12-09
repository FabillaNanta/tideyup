<?php

session_start()
?>

<?php
    include ("koneksi.php");
    $kode_user = $_SESSION["kode_user"];
    $query = "SELECT * FROM `tidepad` WHERE kode_user='$kode_user'";
    mysqli_query($koneksi, $query);
?>


<html>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<head>
	<title>tideyup</title>
	<nav class="navbar sticky-top navbar-light bg-light">
 		 <a class="navbar-brand mx-auto" align="center" href="index.php">
   		 <img src="img/logo.png" width="70%" height="70%" class="d-inline-block align-top" alt="">
  		 </a>
    </nav>

</head>
<body>
<style>
  html {
    height: 100%;
        }
  body {
    background-color: #393644;
    background-image: url('img/carousel1.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
        }

</style>
	<h2 align="center"></h2>
  <div class="container col-md px-4 py-5">
	<div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-dark rounded-3">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
      <h3 class="display-7 fw-normal text-white font-monospace"><!-- cek apakah sudah login -->
		<?php 
			session_start();
			if($_SESSION['status']!="login"){
				header("location:../index.php?pesan=belum_login");
			}
		?>
	
	    <p align="center" class="font-monospace" ">Welcome, <?php echo $_SESSION['username']; ?>! to your personal digital recording!.</p></h3>

      <p class="lead fw-normal text-white font-monospace">click here to start your observation</p>
      <a class="btn btn-outline-primary" href="tidepad.php">start</a>
    </div>
    <div class="product-device shadow-sm d-none d-md-block"></div>
    <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
  </div>

  
  <div class="container px-4 py-5" id="hanging-icons">
    <h2 class="pb-2 border-bottom font-monospace">Exclusive Feature</h2>
    <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#toggles2"/></svg>
        </div>
        <div class="text-black font-monospace">
          <h2>about <em>tideyup</em></h2>
          <p>for more information on how to use this app, please kindly read the following page</p>
          <a href="about.html" class="btn btn-primary">
            read more
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#cpu-fill"/></svg>
        </div>
        <div class="text-dark font-monospace">
          <h2>tidepad</h2>
          <p class="text-white">Record or take personal notes primarly for your oceans wave observation data. Simply fill in the form then you can review your structured notes!</p>
          <a href="tidepad.php" class="btn btn-primary">
            start now!
          </a>
        </div>
      </div>
      <div class="col d-flex align-items-start">
        <div class="icon-square bg-light text-dark flex-shrink-0 me-3">
          <svg class="bi" width="1em" height="1em"><use xlink:href="#tools"/></svg>
        </div>
        <div class="text-white font-monospace">
          <h2>review session</h2>
          <p>Take a quick journey to look back your observation data</p>
          <a href="reviewdata.php" class="btn btn-primary">
            start now!
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="card text-center bg-success text-white font-monospace">
  <div class="card-header">
    info!
  </div>
  <div class="card-body">
    <h5 class="card-title">Have fun on your observation!</h5>
    <p class="card-text">Fabilla Nanta (2010030) and Ita Arianti ()<br><br>
    <a href="logout.php" class="btn btn-warning">logout</a>
  </div>
  <div class="card-footer text-white font-monospace">
    come back soon!
  </div>
</div>

</body>
<script src="/docs/5.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
