<?php
session_start();
require 'connect.php';

//memproses tombol login
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $pass = $_POST['pass'];

    $query = "SELECT * FROM user where username='$username' and pass='$pass'";
    $result = mysqli_query($conn, $query);
    $num = mysqli_num_rows ($result);

    if($num==1){
        $_SESSION['log'] = 'True';
        header('location:http://localhost/MSIB-ZENIUS/admin.php');
    }else{
        header('location:http://localhost/MSIB-ZENIUS/login.php');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login Admin</title>
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
    <div class="container-login">
        <h3>Masuk</h3>
        <p>Silahkan masuk dengan akun yang sudah ada.</p>
        <form action="" method="post">
            <label>Username</label>
            <input type="text" id="f-login" name="username">
            <label>Password</label>
            <input type="password" id="f-login" name="pass">
            <input type="submit" id="login" name="login" value="Login">
        </form>
    </div>
</body>
</html>
