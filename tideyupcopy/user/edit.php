<!DOCTYPE html>
<html>
	<!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

<head>
	<title>edit menu</title>
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
    background-image: url('img/sesh.jpg');
    background-repeat: no-repeat;
    background-attachment: fixed;  
    background-size: cover;
        }
</style>
    <?php
        include ("koneksi.php");
        $id_data = $_GET['id_data'];

        $query = "select * from tidepad where id_data = $id_data";
        mysqli_query($koneksi, $query);
    ?>
    <h1>edit data</h1>
    <form action="proses_edit.php" method="POST">
        <input type="hidden" name="id_data" value="<?php echo $row['id_data']; ?>">
        date : <input type="date" name="date" value="<?php echo $row['date']; ?>"><br/>
        time : <input type="time" name="time" value=""><?php echo $row['time'];?>"><br/>
        <input type="submit" value="simpan">
    </form>
</body>
</html>