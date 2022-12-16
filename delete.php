<?php
require 'connect.php';

$kode_news = $_GET['kode_news'];

mysqli_query($conn,"DELETE FROM news WHERE kode_news ='$kode_news'") or die(mysqli_error());

// $query = "DELETE * FROM news WHERE kode_news ='$kode_news'";
// mysqli_query($conn, $query);

header('location:http://localhost/MSIB-ZENIUS/admin.php');

// $query = mysqli_query($conn, "DELETE * FROM news WHERE kode_news='$kode'");
// or die(mysqli_error($conn));

// if($query){
//     header("location:http://localhost/MSIB-ZENIUS/admin.php");
// }else{
//     echo "Gagal Menghapus";
// }
?>