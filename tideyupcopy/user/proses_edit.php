<?php

    include("koneksi.php");

    $date = $_POST['date'];
    $time = $_POST['time'];
    $location = $_POST['location'];
    $beach_orientation = $_POST['beach_orientation'];
    $incoming_wave_angle = $_POST['incoming_wave_angle'];
    $depth = $_POST['depth'];
    $tidal_condition = $_POST['tidal_condition'];
    $wind_condition = $_POST['wind_condition'];
    $notes = $_POST['notes'];

    $query = "UPDATE `tidepad` SET date = '$date', time = '$time', location = '$location', beach_orientation = '$beach_orientation', incoming_wave_angle = '$incoming_wave_angle', depth = '$depth', tidal_condition = ' $tidal_condition', wind_condition = '$wind_condition', notes = '$notes' where id_data = $id_data";
    
    if(mysqli_query($koneksi, $query)){
        header("Location: tidepad.php");
    }else{
        header("Location: edit.php?id_data=$id_data");
    }

?>