<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yves Saint Laurent — Show Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styleshowdata.css">
</head>
<body>

    <!-- Navbar YSL -->
    <nav class="navbar navbar-expand-lg navbar-dark ysl-navbar fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.php">
                <img src="logoysl.jpeg" alt="YSL Logo" width="150" height="50">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#yslNavbar" aria-controls="yslNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="yslNavbar">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="input.php">Input Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="showdata.php">Show Data</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link nav-logout" href="home.php">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten tabel/data -->
    <div class="page-section">
        <div class="data-box">
            <div class="data-header">
                <div class="data-title">User Style Reference</div>
                <a href="input.php" class="btn-ysl">Add Data</a>
            </div>

            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>User ID</th>
                            <th>Product Category</th>
                            <th>Fashion Style</th>
                            <th>Clothing Size</th>
                            <th>Shoe Size</th>
                            <th>Updates Preference</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                    $data = mysqli_query($koneksi, "SELECT * FROM style_reference");
                    if (mysqli_num_rows($data) > 0) {
                        while ($d = mysqli_fetch_array($data)) {
                            ?>
                            <tr>
                                <td><?= $d['user_id'] ?></td>
                                <td><?= $d['product_category'] ?></td>
                                <td><?= $d['fashion_style'] ?></td>
                                <td><?= $d['clothing_size'] ?></td>
                                <td><?= $d['shoe_size'] ?></td>
                                <td><?= $d['updates_preference'] ?></td>
                                <td>
                                    <a class="action-link action-update" href="update.php?id=<?= $d['user_id'] ?>">Update</a>
                                    <a class="action-link action-delete" href="delete.php?id=<?= $d['user_id'] ?>" onclick="return confirm('Are you sure you want to delete this data?');">Delete</a>
                                </td>
                            </tr>
                            <?php
                        }
                    } else {
                        ?>
                        <tr class="empty-row">
                            <td colspan="7">No data found.</td>
                        </tr>
                        <?php
                    }
                    ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
