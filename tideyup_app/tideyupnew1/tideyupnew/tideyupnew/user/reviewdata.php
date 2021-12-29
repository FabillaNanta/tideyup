<?php
    include ("koneksi.php");
    session_start();
    $kode_user = $_SESSION["kode_user"];
    $query = "SELECT * FROM tidepad WHERE id_user='$kode_user'";
    $hasil = mysqli_query($koneksi, $query);
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
    <a class="nav-link active" aria-current="page" href="data">Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="grafik.php">Graph</a>
  </li>
</ul>
<br>
<div class="card font-monospace" id="data">
        <div class="card-header">
          your observation data
        </div>
        <div class="card-body">
        <div class="row g-3 align-items-center">
  <div class="col-auto">
    <div class="table-responsive">
  <table class="table table-bordered table-dark">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Time</th>
            <th>Location</th>
            <th>Beach_Orientation</th>
            <th>Incoming Wave Angle</th>
            <th>Depth</th>
            <th>Tidal Condition</th>
            <th>Wind Condition</th>
            <th>Notes</th>

            <th colspan="2">Action</th>
        </tr>
        <?php
        while($row = mysqli_fetch_array($hasil)){
            echo "<tr>";
            echo "<td>".$row['id_data']."</td>";
            echo "<td>".$row['date']."</td>";
            echo "<td>".$row['time']."</td>";
            echo "<td>".$row['location']."</td>";
            echo "<td>".$row['beach_orientation']."</td>";
            echo "<td>".$row['incoming_wave_angle']."</td>";
            echo "<td>".$row['depth']."</td>";
            echo "<td>".$row['tidal_condition']."</td>";
            echo "<td>".$row['wind_condition']."</td>";
            echo "<td>".$row['notes']."</td>";
            echo "<td><a href='edit.php?id_data=".$row['id_data']."'>edit</a></td>";
            echo "<td><a href='delete.php?id_data=".$row['id_data']."'>delete</a></td>";
            echo "</tr>";
        }
        
        
        ?>  
    </table>
</div>
    </label>
  </div>
<br>
  <div class="d-grid gap-2">
        <a href="tidepad.php" class="btn btn-dark font-monospace" type="button">add more data</a>
      </div>
      <br>
      <div class="d-grid gap-2">
        <a href="index.php" class="btn btn-warning font-monospace" type="button">home</a>
      </div>
 