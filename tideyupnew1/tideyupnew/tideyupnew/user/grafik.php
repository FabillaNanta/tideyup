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
    <script src="js/Chart.js"></script>

   <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js" integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

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
    <a class="nav-link" aria-current="page" href="reviewdata.php">Data</a>
  </li>
  <li class="nav-item">
    <a class="nav-link active" href="grafik.php">Graph</a>
  </li>
</ul>
<br>
<div class="card font-monospace" id="data">
        <div class="card-header">
          your observation graph
        </div>
        <div class="card-body">
        <div class="row g-3 align-items-center">
<br>
<canvas id="myChart"></canvas>
<?php
    // Koneksikan ke database
    
    //Inisialisasi nilai variabel awal
    $depth= "";
    $jumlah=null;
    //Query SQL
    $query="SELECT depth, COUNT(*) AS total FROM tidepad WHERE id_user='$kode_user' GROUP BY depth";
    $hasil=mysqli_query($koneksi,$query);

    while ($data = mysqli_fetch_array($hasil)) {
        $dep=$data['depth'];
        $depth .= "'$dep'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $depth; ?>],
            datasets: [{
                label:'Ocean Depth Observation Data ',
                backgroundColor: ['rgb(229, 152, 102  )', 'rgb(163, 228, 215)', 'rgb(235, 222, 240)','rgb(246, 221, 204)'],
                borderColor: ['rgb(244, 246, 246 )'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
<br>
<canvas id="myChart2"></canvas>
<?php
    // Koneksikan ke database
    
    //Inisialisasi nilai variabel awal
    $location= "";
    $jumlah=null;
    //Query SQL
    $query="SELECT location, COUNT(*) AS total FROM tidepad WHERE id_user='$kode_user' GROUP BY location";
    $hasil=mysqli_query($koneksi,$query);

    while ($data = mysqli_fetch_array($hasil)) {
        $loc=$data['location'];
        $location .= "'$loc'". ", ";
        //Mengambil nilai total dari database
        $jum=$data['total'];
        $jumlah .= "$jum". ", ";

    }
    ?>
<script>
    var ctx = document.getElementById('myChart2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'bar',
        // The data for our dataset
        data: {
            labels: [<?php echo $location; ?>],
            datasets: [{
                label:'Observation Location ',
                backgroundColor: ['rgb(70, 164, 164   )', 'rgb(83, 164, 70 )', 'rgb(235, 222, 240)','rgb(246, 221, 204)'],
                borderColor: ['rgb(244, 246, 246 )'],
                data: [<?php echo $jumlah; ?>]
            }]
        },

        // Configuration options go here
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero:true
                    }
                }]
            }
        }
    });
</script>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.6.2/chart.min.js" integrity="sha512-tMabqarPtykgDtdtSqCL3uLVM0gS1ZkUAVhRFu1vSEFgvB73niFQWJuvviDyBGBH22Lcau4rHB5p2K2T0Xvr6Q==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>