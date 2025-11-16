<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Yves Saint Laurent — Home</title>

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- External CSS -->
  <link rel="stylesheet" href="stylehome.css">
</head>

<body class="bg-black text-white">

  <!-- Background Video -->
  <video autoplay muted loop class="bg-video">
      <source src="1117.mp4" type="video/mp4">
  </video>

  <!-- NAVBAR -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 fixed-top">
  <div class="container">
    
    <a class="navbar-brand fw-bold text-uppercase" href="#">
      <img src="logoysl.jpeg" alt="YSL Logo" width="200" height="50">
    </a>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ms-auto">

        <li class="nav-item">
          <a class="nav-link active" href="index.html">Home</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="aboutus.php">About Us</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="login.php">Login</a>
        </li>

      </ul>
    </div>

  </div>
</nav>


  <!-- HERO SECTION -->
  <section class="hero d-flex justify-content-center align-items-center text-center">
    <div class="container">
      <h1 class="display-3 fw-bold text-uppercase mb-3">Timeless. Bold. Monochrome.</h1>
      <p class="lead mb-4">Discover the new Yves Saint Laurent Collection — 2025 Edition</p>
      <a href="aboutus.php" class="btn btn-outline-light btn-lg px-4">Explore Now</a>
    </div>
  </section>

  <!-- PRODUCTS SECTION -->
<section id="products" class="py-5 bg-black text-white">
  <div class="container">

    <h2 class="text-center mb-4 fw-bold text-uppercase">Featured Collection</h2>
    <p style="text-align: justify;"> The Yves Saint Laurent 2025 Collection emerges as a study in restraint and power—an ode to 
      <strong>Timeless. Bold. Monochrome.</strong> where every line is sculpted with intention and every 
      shadow holds meaning. In this collection, black and white cease to be mere colors; they become 
      architecture, atmosphere, and attitude. Each piece is designed as a quiet rebellion against ornamentation, 
      revealing elegance through purity, precision, and the unmistakable authority of form. 
    </p> 
    <p style="text-align: justify;"> Silhouettes are elongated, sharply contoured, and unapologetically 
      commanding—moving with a slow, deliberate confidence reminiscent of cinematic stillness. 
      Textures collide in subtle tension: matte against gloss, softness against structure, opacity against depth. 
      This interplay creates a visual rhythm that defines the YSL man: enigmatic, modern, and impossible to 
      overlook. The monochrome palette becomes a language of its own—minimal, yet endlessly expressive. 
    </p> 
    <p style="text-align: justify;"> In 2025, YSL reimagines timelessness not as nostalgia, but as endurance. 
      Each garment feels suspended between eras, immune to trends, existing instead in a world where craftsmanship
      and clarity reign. This collection is a declaration that boldness does not shout—it stands still, 
      unwavering, immaculate. A future classic, carved from the essential, and destined to remain.
    </p>

    <div id="yslCarousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="2500">

      <div class="carousel-inner">

        <!-- SLIDE 1 -->
        <div class="carousel-item active text-center">
          <div class="carousel-frame mx-auto">
            <img src="yve1.jpg" class="d-block img-fluid rounded shadow" alt="Product 1">
          </div>
          <h3 class="product-title mt-3">Midnight Sculpted Overcoat</h3>
        </div>

        <!-- SLIDE 2 -->
        <div class="carousel-item text-center">
          <div class="carousel-frame mx-auto">
            <img src="yve2.avif" class="d-block img-fluid rounded shadow" alt="Product 2">
          </div>
          <h3 class="product-title mt-3">Noir Precision Belted Coat</h3>
        </div>

        <!-- SLIDE 3 -->
        <div class="carousel-item text-center">
          <div class="carousel-frame mx-auto">
            <img src="yve3.jpg" class="d-block img-fluid rounded shadow" alt="Product 3">
          </div>
          <h3 class="product-title mt-3">Obsidian Command Trench</h3>
        </div>

        <!-- SLIDE 4 -->
        <div class="carousel-item text-center">
          <div class="carousel-frame mx-auto">
            <img src="yve4.avif" class="d-block img-fluid rounded shadow" alt="Product 4">
          </div>
          <h3 class="product-title mt-3">Nocturne Drape</h3>
        </div>

        <!-- SLIDE 5 -->
        <div class="carousel-item text-center">
          <div class="carousel-frame mx-auto">
            <img src="yve5.avif" class="d-block img-fluid rounded shadow" alt="Product 5">
          </div>
          <h3 class="product-title mt-3">Obsidian Vanguard</h3>
        </div>

      </div>

      <!-- PANAH KIRI -->
      <button class="carousel-control-prev" type="button" data-bs-target="#yslCarousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </button>

      <!-- PANAH KANAN -->
      <button class="carousel-control-next" type="button" data-bs-target="#yslCarousel" data-bs-slide="next">
        <span class="carousel-control-next-icon"></span>
      </button>

    </div>

  </div>
</section>

<footer class="ysl-footer text-white py-4 bg-black">
  <div class="container text-center">

    <img src="logoysl.jpeg" alt="YSL Logo" height="60" class="mb-3">

    <div class="footer-links mb-3">
      <a href="#" class="footer-link mx-3">Home</a>
      <a href="aboutus.php" class="footer-link mx-3">About Us</a>
      <a href="login.php" class="footer-link mx-3">Login</a>
    </div>

    <p class="copyright">
      © 2025 Yves Saint Laurent Fashion — All Rights Reserved
    </p>
  </div>
</footer>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
