<?php
require 'connect.php';
$sql = mysqli_query($conn,"SELECT * FROM news WHERE kategori='pol'");
?>

<!DOCTYPE html>
<head>
    <title>ConnectIT News - Menghubungkan Banyak Informasi</title>
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
<div class="container-top">
    <nav class="navbar">
    <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="img/ctn.png" alt="logo" width="180" height="90" /></a>
    <div class="navbar-search">
    <form class="d-flex " role="search">
        <input class="form-control me-2" type="search" placeholder="Cari berita hari ini" aria-label="Search">
        <button class="button-icon" type="button"><i class="fa fa-search fa-2x" aria-hidden="true"></i></button>
    </form>
    <div class="collapse navbar-collapse">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Masuk</a>
        </li>
    </div>
    </div>
    <div class="masuk">
        <a class="nav-link" href="login.php">Masuk</a>
    </div>
</div>
</nav>
<nav class="navbar navbar-expand-lg">
    <div class="collapse navbar-collapse navbar-index" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="edukasi.php">Edukasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ent.php">Entertainment</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="olahraga.php">Olahraga</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="politik.php">Politik</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="kesehatan.php">Kesehatan</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="makanan.php">Makanan</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- ISI BERITA -->
<div class="row berita-ent">
    <?php while($data = mysqli_fetch_array($sql)){
    ?>
        <!-- <img src="" class="img-top" alt="..."> -->
        <h5 href=".."><?php echo $data['title'];?></h5>
        <p><?php echo $data['isi'];?><a href="..">...baca selengkapnya.</a></p>
    <?php } ?>
</div>

<!-- FOOTER -->
<div class="container">
    <div class="row row-footer">
        <div class="col-3">
            <img class="img-logo" src="img/logo.png" alt="">
        </div>
        <div class="col-5">
            <h1>ConnectIT NEWS</h1>
        </div>
        <div class="col-4">
            <h5>CONTACT US</h5>
            <a href="https://www.instagram.com"><img src="img/logoig.png" alt="Instagram" width="45px"></a>
            <a href="https://www.linkedin.com"><img src="img/logolinkedln.png" alt="Linkedln" width="45px"></a>
            <a href="http://www.youtube.com"><img src="img/logoytb.png" alt="Youtube" width="45px"></a>
            <a href="http://www.facebook.com"><img src="img/logofb.png" alt="Facebook" width="45px"></a>
            <a href="http://www.twitter.com"><img src="img/logotwt.png" alt="Twitter" width="45px"></a>
        </div>
    </div>
</div>

</body>
</html>