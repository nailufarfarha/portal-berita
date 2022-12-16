<?php
require 'connect.php';
?>

<!DOCTYPE html>
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
    
    <!-- CRUD -->
    <div class="container edit-berita">
        <h5>DAFTAR BERITA</h5>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Kode Berita</th>
                <th>Judul Berita</th>
                <th>Isi</th>
                <th>Kategori</th>
                <th></th>
            </tr>
            </thead>
            <tbody class="table-group-divider">
            <?php
                $sql = "SELECT * FROM news";
                $query = mysqli_query($conn, $sql);
                $i = 1;
                while ($data = mysqli_fetch_array($query)) {
                ?>

                <tr>
                    <td><b><?php echo $i++ ?></b></td>
                    <td><?php echo $data['kode_news'] ?></td>
                    <td><?php echo $data['title'] ?></td>
                    <td><?php echo $data['isi'] ?></td>
                    <td><?php echo $data['kategori'] ?></td>
                    <td>
                        <a href="delete.php?kode_news=<?php echo $data['kode_news']; ?>">Delete</a>
                        <a href="update.php?kode_news=<?php echo $data['kode_news']; ?>">Update</a>
                    </td>
                </tr>
                
                <?php 
                }
                ?>
            </tbody>
        </table>
    </div>    
    
</body>
</html>