<?php
require 'connect.php';
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
<div class="row row-awal">
  <div class="col-6">
  <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='EN3'");
  while($data = mysqli_fetch_array($sql)){
    ?>
    <h3 class="title">TRENDING NOW!</h3>
    <img src="https://ichef.bbci.co.uk/news/976/cpsprodpb/ED53/production/_96155706_mediaitem96155705.jpg" class="img-top" alt="...">
    <h5><?php echo $data['title'];?></h5>
    <p><?php echo $data['isi'];?><a href="..">...baca selengkapnya.</a></p>
    <?php } ?>
  </div>
  <div class="col-6 mt-5">
  <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='OR1'");
  while($data = mysqli_fetch_array($sql)){
    ?>
    <img src="https://cdn0-production-images-kly.akamaized.net/tH9yS10KTMkDtIbCb-egzDcfqyw=/640x360/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/2901456/original/005649600_1567582421-20190903-Logo-Piala-Dunia-2022-Qatar-Resmi-Diluncurkan-AP-6.jpg" class="img-top" alt="...">
    <h5><?php echo $data['title'];?></h5>
    <p><?php echo $data['isi']; ?><a href="..">...baca selengkapnya.</a></p>
  </div>
  <?php } ?>
</div>

<div class="row row-tengah">
    <div class="col-4">
    <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='MK3'");
    while($data = mysqli_fetch_array($sql)){
    ?>
        <img src="https://asset.kompas.com/crops/0guYsQD15LhtHa0YNd9VRxsYasA=/0x0:1000x667/750x500/data/photo/2020/10/03/5f7837d5344c8.jpg" class="img-top t-tengah" alt="...">
        <h5><?php echo $data['title'];?></h5>
        <p><?php echo $data['isi']; ?><a href="..">...baca selengkapnya.</a></p>
    <?php } ?>
    </div>
    <div class="col-4">
    <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='EN1'");
    while($data = mysqli_fetch_array($sql)){
    ?>
        <img src="https://cdn0-production-images-kly.akamaized.net/nsOXdJ1HktOqC_WQq4JGa3RPxSY=/1200x900/smart/filters:quality(75):strip_icc():format(jpeg)/kly-media-production/medias/4262035/original/015927400_1671087206-Picsart_22-12-15_12-23-13-798.jpg" class="img-top  t-tengah" alt="...">
        <h5><?php echo $data['title'];?></h5>
        <p><?php echo $data['isi']; ?><a href="..">...baca selengkapnya.</a></p>
    <?php } ?>
    </div>
    <div class="col-4">
    <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='KS2'");
    while($data = mysqli_fetch_array($sql)){
    ?>
        <img src="https://asset.kompas.com/crops/YKs8vxtiY3bRm9aCEfEYWvBJgv4=/0x12:983x667/750x500/data/photo/2020/08/01/5f252288079e4.jpg" class="img-top  t-tengah" alt="...">
        <h5><?php echo $data['title'];?></h5>
        <p><?php echo $data['isi']; ?><a href="..">...baca selengkapnya.</a></p>
    <?php } ?>
    </div>
</div>

<div class="row row-akhir">
    <div class="col-6">
        <table>
            <tr>
            <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='PL2'");
            while($data = mysqli_fetch_array($sql)){
            ?>
                <th>
                    <img src="https://akcdn.detik.net.id/visual/2018/08/31/2ae3c978-4069-41f9-a855-734e9ce558c1_169.jpeg?w=650" class="img-ra" alt="...">
                </th>
                <th>
                <h5><?php echo $data['title'];?></h5>
                </th>
            <?php } ?>
            </tr>
            <tr>
            <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='ED1'");
            while($data = mysqli_fetch_array($sql)){
            ?>
                <th>
                    <img src="https://statik.tempo.co/data/2018/06/26/id_714716/714716_720.jpg" class="img-ra" alt="...">
                </th>
                <th>
                <h5><?php echo $data['title'];?></h5>
                </th>
            <?php } ?>
            </tr>
            <tr>
            <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='MK5'");
            while($data = mysqli_fetch_array($sql)){
            ?>
                <th>
                    <img src="https://awsimages.detik.net.id/visual/2022/06/30/menu-maka-di-korea-selatan_169.jpeg?w=715&q=90" class="img-ra" alt="...">
                </th>
                <th>
                <h5><?php echo $data['title'];?></h5>
                </th>
            <?php } ?>
            </tr>
            <tr>
            <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='KS4'");
            while($data = mysqli_fetch_array($sql)){
            ?>
                <th>
                    <img src="https://totabuan.news/wp-content/uploads/2022/12/master_b059X6l2Pl_815.jpg" class="img-ra" alt="...">
                </th>
                <th>
                <h5><?php echo $data['title'];?></h5>
                </th>
            <?php } ?>
            </tr>
            <tr>
            <?php $sql = mysqli_query($conn,"SELECT * FROM news WHERE kode_news='OR2'");
            while($data = mysqli_fetch_array($sql)){
            ?>
                <th>
                    <img src="https://img.inews.co.id/media/822/files/inews_new/2021/11/11/praveenmelati.jpg" class="img-ra" alt="...">
                </th>
                <th>
                <h5><?php echo $data['title'];?></h5>
                </th>
            <?php } ?>
            </tr>
        </table>
    </div>
    <div class="col-6">
        <h4>REKOMENDASI UNTUK ANDA</h4>
        <div class="list-group">
            <a href="" class="list-item-action">Cara Hilangkan Dark Spot Demi Kulit Cerah Merata</a>
            <a href="" class="list-item-action">9 Kampus Milik BUMN buat Mahasiswa, Prospek Kerjanya Tinggi</a>
            <a href="" class="list-item-action">Instagram Perkenalkan Candid Stories</a>
            <a href="" class="list-item-action">Langka di Indonesia, Jurusan Kriminologi Hanya Ada di 3 Kampus</a>
        </div>
    </div>
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