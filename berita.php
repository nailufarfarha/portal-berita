<?php
require 'connect.php';
?>

<!-- memproses tambah berita -->
<?php
if(isset($_POST['tambahberita'])){
    $kode_news = $_POST['kode_news'];
    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $brt = mysqli_query($conn,"INSERT into news (kode_news, title, isi, kategori) values ('$kode_news','$title','$isi','$kategori')");
    if($brt){
        header('location:http://localhost/MSIB-ZENIUS/admin.php');
    }else{
        echo "Gagal";
        header('location:http://localhost/MSIB-ZENIUS/admin.php');
    }

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>ConnectIT News - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
      rel="stylesheet"
      integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"/>
    <!-- CSS -->
    <link href="style.css" rel="stylesheet" type="text/css">
    <link href="img/logo.png" rel="shortcut icon">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg">
      <div class="container">
            <a class="navbar-brand" href="#"><img src="img/ctn.png" alt="logo" width="180" height="90" /></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="admin.php">Home</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="berita.php">Berita</a>
                </li>
            </ul>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto mb-lg-0">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="logout.php">Keluar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Berita -->
    <div class="container isi-berita">
        <h5>MASUKAN BERITA BARU</h5>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Kode Berita</td>
                    <td><input type="text" name="kode_news" id="kode_news" style="width: 757px"></td>
                </tr>
                <tr>
                    <td>Judul Berita</td>
                    <td><input type="text" name="title" id="title" style="width: 757px"></td>
                </tr>
                <tr>
                    <td>Deskripsi Berita</td>
                    <td><textarea name="isi" id="isi" cols="100" rows="5"></textarea></td>
                </tr>
                <tr>
                    <td>Kategori Berita</td>
                    <td>
                        <!-- Dropdown -->
                        <select class="form-select" id='kategori' name='kategori' aria-label="Default select example">
                            <option selected>Kategori</option>
                            <option value="ed">Edukasi</option>
                            <option value="ent">Entertainment</option>
                            <option value="or">Olahraga</option>
                            <option value="pol">Politik</option>
                            <option value="kes">Kesehatan</option>
                            <option value="mkn">Makanan</option>
                            <option value="inter">Internasional</option>
                            <option value="jbr">Jabar</option>
                            <option value="jtg">Jateng</option>
                            <option value="jtm">Jatim</option>
                        </select>
                    </td>
                </tr>
            </table>
            <div class="d-grid justify-content-end ml" style="margin: 20px 245px 0px 0px">
                <button class="btn btn-primary" id="tamber" type="submit" name="tambahberita">Tambah</button>
            </div>
        </form>
    </div>
</body>
</html>