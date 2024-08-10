<?php

  include "koneksi.php";

  $id = $_GET['id_pay'];
  $query = "DELETE FROM payment WHERE id_pay = $id";
  $result = mysqli_query($koneksi, $query);
  if($result){
    header("location: index.php");
  }

?>