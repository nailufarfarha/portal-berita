<?php

$conn = mysqli_connect ("localhost","root","","cnews");
// if($conn){
//     echo "Koneksi sukses";
// }else{
//     die("Error: ".mysqli_connect_error());
// }

// Update Berita
if(isset($_POST['updateberita'])){
    $kode_news = $_POST['kode_news'];
    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $update = mysqli_query($conn,"UPDATE news SET title='$title', isi='$isi', kategori='$kategori' WHERE kode_news='$kode_news'") or die(mysqli_error());
    if($update){
        header('location:http://localhost/MSIB-ZENIUS/admin.php');
    }else{
        echo "Gagal";
        header('location:http://localhost/MSIB-ZENIUS/admin.php');
    }
}
?>

