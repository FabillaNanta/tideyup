<?php
session_start();
$kode_user = $_SESSION["kode_user"];
include("koneksi.php");

if (isset($_POST['submit'])) {
    $id_data = $_POST["id_data"];
    $id_user = $_SESSION["kode_user"];
    $date = $_POST["date"];
    $time = $_POST["time"];
    $location = $_POST["location"];
    $beach_orientation = $_POST["beach_orientation"];
    $incoming_wave_angle = $_POST["incoming_wave_angle"];
    $depth = $_POST["depth"];
    $tidal_condition = $_POST["tidal_condition"];
    $wind_condition = $_POST["wind_condition"];
    $notes = $_POST["notes"];

    $query = "INSERT INTO tidepad VALUES ('$id_data','$id_user', '$date', '$time', '$location', '$beach_orientation', '$incoming_wave_angle', '$depth', '$tidal_condition', '$wind_condition', '$notes')";


    mysqli_query($koneksi, $query);
    header("Location: reviewdata.php?pesan=submit");
}


?>