<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yves Saint Laurent — Input Data</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- EXTERNAL CSS -->
    <link rel="stylesheet" href="stylelogin.css">
</head>

<body class="bg-black text-white">

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-dark bg-black py-3 fixed-top ysl-navbar">
    <div class="container">
        <a class="navbar-brand fw-bold text-uppercase" href="home.php">
            <img src="logoysl.jpeg" width="200" height="50" alt="YSL Logo">
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="nav">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a href="input.php" class="nav-link">Input Data</a>
                </li>
                <li class="nav-item">
                    <a href="showdata.php" class="nav-link">Show Data</a>
                </li>
                <li class="nav-item">
                    <a href="home.php" class="nav-link nav-logout">Logout</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- REGISTER / PREFERENCES SECTION -->
<section class="login-section d-flex justify-content-center align-items-center">
    <div class="login-box p-5 shadow-lg">
        <h2 class="text-center fw-bold mb-4">Register Preferences</h2>

        <form method="POST" action="input_aksi.php">
            <div class="mb-3">
                <input type="text" name="user_id" class="form-control ysl-input" placeholder="User ID" required>
            </div>

            <!-- PRODUCT CATEGORY -->
            <div class="mb-3">
                <select name="product_category" class="form-control ysl-input" required>
                    <option value="" disabled selected>Product Category</option>
                    <option value="Perfume">Perfume</option>
                    <option value="Lipstick">Lipstick</option>
                    <option value="Bags">Bags</option>
                    <option value="Shoes">Shoes</option>
                    <option value="Skincare">Skincare</option>
                    <option value="Ready-to-wear">Ready-to-wear</option>
                </select>
            </div>

            <!-- FASHION STYLE -->
            <div class="mb-3">
                <select name="fashion_style" class="form-control ysl-input" required>
                    <option value="" disabled selected>Fashion Style</option>
                    <option value="Elegant">Elegant</option>
                    <option value="Minimalist">Minimalist</option>
                    <option value="Bold">Bold</option>
                    <option value="Classic">Classic</option>
                    <option value="Streetwear">Streetwear</option>
                    <option value="Vintage Modern">Vintage Modern</option>
                </select>
            </div>

            <!-- CLOTHING SIZE -->
            <div class="mb-3">
                <select name="clothing_size" class="form-control ysl-input" required>
                    <option value="" disabled selected>Clothing Size</option>
                    <option value="XS">XS</option>
                    <option value="S">S</option>
                    <option value="M">M</option>
                    <option value="L">L</option>
                    <option value="XL">XL</option>
                </select>
            </div>

            <!-- SHOE SIZE -->
            <div class="mb-3">
                <select name="shoe_size" class="form-control ysl-input" required>
                    <option value="" disabled selected>Shoe Size</option>
                    <option value="36">36</option>
                    <option value="37">37</option>
                    <option value="38">38</option>
                    <option value="39">39</option>
                    <option value="40">40</option>
                    <option value="41">41</option>
                    <option value="42">42</option>
                </select>
            </div>

            <!-- UPDATES PREFERENCE -->
            <div class="mb-3">
                <select name="updates_preference" class="form-control ysl-input" required>
                    <option value="" disabled selected>Receive Updates?</option>
                    <option value="Yes">Yes</option>
                    <option value="No">No</option>
                </select>
            </div>

            <button type="submit" name="save" class="btn btn-ysl w-100 mt-2">Save</button>
        </form>
    </div>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
