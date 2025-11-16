<?php 
// AREA PHP - BACK END
session_start();
include 'koneksi.php'; 

if(isset($_POST['login'])){ 
    $username = $_POST['username']; 
    $password = $_POST['password']; 

    $query = "SELECT * FROM users WHERE username='$username'"; 
    $result = mysqli_query($koneksi, $query); 
    $user = mysqli_fetch_assoc($result); 

    // Jika username ditemukan dan password benar
    if($user && password_verify($password, $user['password'])){ 
        $_SESSION['username'] = $user['username'];
        $_SESSION['nama_lengkap'] = $user['nama_lengkap'];

        // Redirect ke halaman home.php
        header("Location: input.php");
        exit; // hentikan eksekusi setelah redirect
    } else {
        echo "<script>alert('Username atau password salah!');</script>";
    }
}
?> 

<!-- AREA INTERFACE - FRONT END --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yves Saint Laurent — Login</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- External CSS -->
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body class="bg-black text-white">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 fixed-top">
    <div class="container">
        <a class="navbar-brand fw-bold text-uppercase" href="index.php">
            <img src="logoysl.jpeg" width="200" height="50" alt="YSL Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a href="home.php" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="aboutus.php" class="nav-link">About Us</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link active">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- LOGIN FORM -->
<section class="login-section d-flex justify-content-center align-items-center">
    <div class="login-box p-5 shadow-lg">
        <h2 class="text-center fw-bold mb-4">Login</h2>

        <form method="POST">
            <div class="mb-3">
                <input type="text" name="username" class="form-control ysl-input" placeholder="Username" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control ysl-input" placeholder="Password" required>
            </div>

            <button type="submit" name="login" class="btn btn-ysl w-100">Login</button>


            <p class="mt-3 text-center small">
                Don’t have an account? 
                <a href="register.php" class="ysl-link">Register here</a>
            </p>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
