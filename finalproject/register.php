<?php
include 'koneksi.php';

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    // Cek apakah username sudah ada
    $check = mysqli_query($koneksi, "SELECT * FROM users WHERE username='$username'");
    if(mysqli_num_rows($check) > 0){
        echo "<script>alert('Username is already taken! Please choose a different username.');</script>";
    } else {
        $query = "INSERT INTO users (`name`, `username`, `age`, `email`, `password`)
          VALUES ('$name', '$username', '$age', '$email', '$password')";
        $result = mysqli_query($koneksi, $query);

        if ($result){
            echo "<script>alert('Registration successful! Please log in'); window.location='login.php';</script>";
        } else {
            echo "Registration failed!" . mysqli_error($koneksi);
        }
    }
}
?>


<!--AREA INTERFACE - FRONT END--> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yves Saint Laurent — Register</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Same CSS as login -->
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body class="bg-black text-white">

<!-- NAVBAR (same as login) -->
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
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- REGISTER SECTION (same layout as login) -->
<section class="login-section d-flex justify-content-center align-items-center">
    <div class="login-box p-5 shadow-lg">
        <h2 class="text-center fw-bold mb-4">Register</h2>

        <form method="POST">
            <div class="mb-3">
                <input type="text" name="name" class="form-control ysl-input" placeholder="Name" required>
            </div>

            <div class="mb-3">
                <input type="text" name="username" class="form-control ysl-input" placeholder="Username" required>
            </div>

            <div class="mb-3">
                <input type="number" name="age" class="form-control ysl-input" placeholder="Age" required>
            </div>

            <div class="mb-3">
                <input type="email" name="email" class="form-control ysl-input" placeholder="Email" required>
            </div>

            <div class="mb-3">
                <input type="password" name="password" class="form-control ysl-input" placeholder="Password" required>
            </div>

            <button type="submit" name="register" class="btn btn-ysl w-100 mt-2">Register</button>

            <p class="mt-3 text-center small">
                Already have an account?
                <a href="login.php" class="ysl-link">Login here</a>
            </p>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
