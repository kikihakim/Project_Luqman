<?php
//memulai session
session_start();
$_SESSION['sesi2041'] = NULL;
require_once('koneksi.php');

//extract post
extract($_POST);

if(isset($btnSignin)) {
    $sqlLogin = "select * from tbuser where username='$username' and password='$pass'";
    $hasilLogin = mysqli_query($db, $sqlLogin);
    if($hasilLogin->num_rows>=1) {
        // Jika berhasil login
        $data=mysqli_fetch_array($hasilLogin);
        // Ambil data dan simpan ke dalam session
        $_SESSION['sesi2041'] = $data["username"];
        $_SESSION['nama'] = $data["nama"];
          echo "<script>location='index.php';</script>";
    }else{
        //Jika gagal login
        echo "<script>alert('User dan Password Salah!');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Signin Template · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sign-in/">

    

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    
<main class="form-signin">
  <form method="post" action="">
      <!-- memasukkan foto yang sudah di simpan pada folder htdocs-->
    <img class="mb-4" src="images/Luqman.jpg" alt=""  
    style ="width:80px;height:80px;padding:5px;border-radius: 50%"> <!-- mengatur tampilan gambar agar lebih menarik -->
    <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

    <div class="form-floating">
      <input type="email" name="username" class="form-control" id="floatingInput" placeholder="name@example.com"> <!--Tambahkan name = "username"-->
      <label for="floatingInput">Email address</label>
    </div>
    <div class="form-floating">
      <input type="password" name="pass" class="form-control" id="floatingPassword" placeholder="Password"> <!--Tambahkan name = "pass"-->
      <label for="floatingPassword">Password</label>
    </div>

    <div class="checkbox mb-3">
      <label>
        <input type="checkbox" value="remember-me"> Remember me
      </label>
    </div>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name=btnSignin>Sign in</button> <!--Tambahkan name button ; name=btnSignin>
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2021</p>
  </form>
</main>


    
  </body>
</html>