<?php

  include "koneksi.php";

  $id = $_GET['id_psn'];
  $query = "DELETE FROM pesan WHERE id_psn = $id";
  $result = mysqli_query($koneksi, $query);
  if($result){
    header("location: index.php");
  }

?>