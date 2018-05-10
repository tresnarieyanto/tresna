<?php
  include "koneksi.php";  
  $query="delete from pegawai where id_pegawai = '$_GET[id_pegawai]'";
    if($conn->query($query))  {
      header("location:menutampil.php");
    } else {
      echo "data tidak terhapus";
    }
  $mysqli->close();
?>