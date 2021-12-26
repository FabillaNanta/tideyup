<?php
    include ("koneksi.php");
    session_start();
    $kode_user = $_SESSION["kode_user"];
    $id_data = $_GET['id_data'];
    if(isset($_POST['submit']) ){
        $id_data = $_POST['id_data'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $location = $_POST['location'];
        $beach_orientation = $_POST['beach_orientation'];
        $incoming_wave_angle = $_POST['incoming_wave_angle'];
        $depth = $_POST['depth'];
        $tidal_condition = $_POST['tidal_condition'];
        $wind_condition = $_POST['wind_condition'];
        $notes = $_POST['notes'];
    
        $query = "UPDATE tidepad SET date = '$date', time = '$time', location = '$location', beach_orientation = '$beach_orientation', incoming_wave_angle = '$incoming_wave_angle', depth = '$depth', tidal_condition = ' $tidal_condition', wind_condition = '$wind_condition', notes = '$notes' where id_data = $id_data";
        
    
        $hasil = mysqli_query($koneksi, $query);
            if(mysqli_affected_rows($koneksi) > 0) {
            echo "<script>alert('success!');
            document.location.href='reviewdata.php'</script>";
        }else{
            echo "<script>alert('failed');
            document.location.href='reviewdata.php'</script>";
        }
    }
    
    $id_data = $_GET['id_data'];
    $tabel = "SELECT * FROM tidepad WHERE id_data = '$id_data'";
    $query = mysqli_query($koneksi, $tabel);
    $row = mysqli_fetch_assoc($query);
    
?>
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
    <div class="container col-md px-4 py-5">
      <div class="card font-monospace">
        <div class="card-header">
        edit your data below...
        </div>
        <div class="card-body">
        <div class="row g-3 align-items-center">
    <form action="proses_edit.php" method="POST">
    <div class="row g-3 align-items-center">
    <input type="hidden" name="id_data" value="<?php echo $row['id_data']; ?>"><br/>
        date : <input type="date" name="date" value="<?php echo $row['date']; ?>"><br/><br>
        time : <input type="time" name="time" value="<?php echo date('H:i',strtotime($row['time']));?>"><br/><br>
        location : <input type="text" name="location" value="<?php echo $row['location']; ?>"><br/><br>
        beach_orientation : <input type="text" name="beach_orientation" value="<?php echo $row['beach_orientation']; ?>"><br/><br>
        incoming_wave_angle : <input type="text" name="incoming_wave_angle" value="<?php echo $row['incoming_wave_angle']; ?>"><br/><br>
        depth : <input type="text" name="depth" value="<?php echo $row['depth']; ?>"><br/><br>
        tidal_condition : <input type="text" name="tidal_condition" value="<?php echo $row['tidal_condition']; ?>"><br/><br>
        wind_condition : <input type="text" name="wind_condition" value="<?php echo $row['wind_condition']; ?>"><br/><br>
        notes : <input type="text" name="notes" value="<?php echo $row['notes'];?> "><br/><br>
        <input type="submit" value="submit" class="btn btn-success" name="submit">
    </form>
    </div>
    </div>
</body>
</html>