<?php
    include ("koneksi.php");
    $kode_user = $_SESSION["kode_user"];
    $query = "SELECT * FROM `tidepad` WHERE kode_user='$kode_user'";
    mysqli_query($koneksi, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>review sesh</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="datepicker/js/bootstrap-datepicker.js"></script>
    <link rel="stylesheet" href="datepicker/css/datepicker.css">

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
          background-image: url('img/boat.png');
          background-repeat: no-repeat;
          background-attachment: fixed;  
          background-size: cover;
              }
      
      </style>
<div class="container col-md px-4 py-5">
<ul class="nav nav-tabs">
  <li class="nav-item">
    <a class="nav-link" aria-current="page" href="reviewdata.php">data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="profile.php">profile</a>
  </li>
</ul>
<br>