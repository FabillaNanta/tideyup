<?php

    $dbserver = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $dbname = "tideyup";

    $koneksi = mysqli_connect($dbserver, $dbuser, $dbpass, $dbname);
    $con = mysqli_connect( $dbserver, $dbuser, $dbpass, $dbname ) or die( mysqli_error() );
    
?>