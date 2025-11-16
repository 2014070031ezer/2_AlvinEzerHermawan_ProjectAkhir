<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About Us — Yves Saint Laurent</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleaboutus.css">
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
                <li class="nav-item"><a href="aboutus.php" class="nav-link active">About Us</a></li>
                <li class="nav-item"><a href="login.php" class="nav-link">Login</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- HEADER SECTION -->
<header class="about-header d-flex align-items-center justify-content-center">
    <div class="text-center">
        <h1 class="display-3 fw-bold title-spacing">ABOUT YVES SAINT LAURENT</h1>
    </div>
</header>

<!-- CONTENT -->
<section class="py-5 about-section">
    <div class="container">

        <h2 class="section-title">Our Legacy</h2>
        <p class="about-text">
            Founded in 1961 by the visionary designer Yves Saint Laurent and his partner Pierre Bergé, 
            the House of Yves Saint Laurent revolutionized modern fashion with a bold new language of style. 
            YSL broke boundaries with pieces such as the iconic Le Smoking suit in 1966, redefining the 
            power and identity of women in fashion. The brand’s philosophy—fearless, minimal, and eternally 
            elegant—continues to shape the world of haute couture and luxury today.
        </p>

        <h2 class="section-title mt-5">A Timeline of Excellence</h2>

        <ul class="timeline">
            <li><span class="year">1961</span> — Yves Saint Laurent founds his namesake couture house in Paris.</li>
            <li><span class="year">1966</span> — Launch of Le Smoking, the first tuxedo for women, redefining femininity.</li>
            <li><span class="year">1971</span> — The daring “Scandal Collection” challenges the norms of couture.</li>
            <li><span class="year">1983</span> — YSL becomes the first living designer honored with a retrospective at the MET Museum.</li>
            <li><span class="year">2002</span> — Yves Saint Laurent retires, marking the end of an era in haute couture.</li>
            <li><span class="year">2012</span> — The brand redefines modern luxury under new creative direction.</li>
            <li><span class="year">2025</span> — YSL continues to lead with its Timeless. Bold. Monochrome. vision.</li>
        </ul>
    </div>
</section>

<!-- FOOTER -->
<footer class="ysl-footer text-white py-4 bg-black">
  <div class="container text-center">

    <img src="logoysl.jpeg" alt="YSL Logo" height="60" class="mb-3">

    <div class="footer-links mb-3">
      <a href="home.php" class="footer-link mx-3">Home</a>
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
