<?php    
   include("koneksi.php");

   $id_data = $_GET['id_data'];

   $query = "DELETE FROM tidepad WHERE id_data = $id_data";
   
   if(mysqli_query($koneksi, $query)){
       header("Location: reviewdata.php");
   }else{
       header("Location: edit.php?id_data=$id_data");
   }

?>