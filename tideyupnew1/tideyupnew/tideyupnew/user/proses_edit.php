<?php
    include("koneksi.php");
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

    $query = "update tidepad set date = '$date', time = '$time', location = '$location', beach_orientation = '$beach_orientation', incoming_wave_angle = '$incoming_wave_angle', depth = '$depth', tidal_condition = ' $tidal_condition', wind_condition = '$wind_condition', notes = '$notes' where id_data = $id_data";
    } 
    
    mysqli_query($koneksi,$query);
    if(mysqli_affected_rows($koneksi) > -1){
             header("Location:reviewdata.php");
    }
    
?>