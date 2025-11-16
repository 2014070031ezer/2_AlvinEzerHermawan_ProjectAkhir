<?php
include 'koneksi.php';

// cek id di URL
if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan di URL.";
    exit;
}

$user_id = $_GET['id'];

// ambil data user
$data = mysqli_query($koneksi, "SELECT * FROM style_reference WHERE user_id='$user_id'");
$d = mysqli_fetch_array($data);

if (!$d) {
    echo "Data dengan User ID tersebut tidak ditemukan.";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yves Saint Laurent — Update Data</title>
    <link rel="stylesheet" href="styleupdate.css">
</head>
<body>

<div class="page-section">
    <div class="data-box form-box">
        <div class="data-header">
            <div class="data-title">Update User Style</div>
            <a href="showdata.php" class="btn-ysl">Back</a>
        </div>

        <form method="post" action="ubah.php" class="ysl-form">
            <!-- hidden untuk primary key -->
            <input type="hidden" name="user_id" value="<?php echo $d['user_id']; ?>">
            <!-- USER ID (disabled) -->
            <div class="form-group">
                <label>User ID</label>
                <input type="text" class="ysl-input" value="<?php echo $d['user_id']; ?>" disabled>
            </div>

            <!-- PRODUCT CATEGORY (select) -->
            <div class="form-group">
                <label>Product Category</label>
                <select name="product_category" class="ysl-input" required>
                    <option value="Perfume"        <?php if ($d['product_category']=='Perfume') echo 'selected'; ?>>Perfume</option>
                    <option value="Lipstick"       <?php if ($d['product_category']=='Lipstick') echo 'selected'; ?>>Lipstick</option>
                    <option value="Bags"           <?php if ($d['product_category']=='Bags') echo 'selected'; ?>>Bags</option>
                    <option value="Shoes"          <?php if ($d['product_category']=='Shoes') echo 'selected'; ?>>Shoes</option>
                    <option value="Skincare"       <?php if ($d['product_category']=='Skincare') echo 'selected'; ?>>Skincare</option>
                    <option value="Ready-to-wear"  <?php if ($d['product_category']=='Ready-to-wear') echo 'selected'; ?>>Ready-to-wear</option>
                </select>
            </div>

            <!-- FASHION STYLE (select) -->
            <div class="form-group">
                <label>Fashion Style</label>
                <select name="fashion_style" class="ysl-input" required>
                    <option value="Elegant"         <?php if ($d['fashion_style']=='Elegant') echo 'selected'; ?>>Elegant</option>
                    <option value="Minimalist"      <?php if ($d['fashion_style']=='Minimalist') echo 'selected'; ?>>Minimalist</option>
                    <option value="Bold"            <?php if ($d['fashion_style']=='Bold') echo 'selected'; ?>>Bold</option>
                    <option value="Classic"         <?php if ($d['fashion_style']=='Classic') echo 'selected'; ?>>Classic</option>
                    <option value="Streetwear"      <?php if ($d['fashion_style']=='Streetwear') echo 'selected'; ?>>Streetwear</option>
                    <option value="Vintage Modern"  <?php if ($d['fashion_style']=='Vintage Modern') echo 'selected'; ?>>Vintage Modern</option>
                </select>
            </div>

            <!-- CLOTHING SIZE (select) -->
            <div class="form-group">
                <label>Clothing Size</label>
                <select name="clothing_size" class="ysl-input" required>
                    <option value="XS" <?php if ($d['clothing_size']=='XS') echo 'selected'; ?>>XS</option>
                    <option value="S"  <?php if ($d['clothing_size']=='S')  echo 'selected'; ?>>S</option>
                    <option value="M"  <?php if ($d['clothing_size']=='M')  echo 'selected'; ?>>M</option>
                    <option value="L"  <?php if ($d['clothing_size']=='L')  echo 'selected'; ?>>L</option>
                    <option value="XL" <?php if ($d['clothing_size']=='XL') echo 'selected'; ?>>XL</option>
                </select>
            </div>

            <!-- SHOE SIZE (select) -->
            <div class="form-group">
                <label>Shoe Size</label>
                <select name="shoe_size" class="ysl-input" required>
                    <option value="36" <?php if ($d['shoe_size']=='36') echo 'selected'; ?>>36</option>
                    <option value="37" <?php if ($d['shoe_size']=='37') echo 'selected'; ?>>37</option>
                    <option value="38" <?php if ($d['shoe_size']=='38') echo 'selected'; ?>>38</option>
                    <option value="39" <?php if ($d['shoe_size']=='39') echo 'selected'; ?>>39</option>
                    <option value="40" <?php if ($d['shoe_size']=='40') echo 'selected'; ?>>40</option>
                    <option value="41" <?php if ($d['shoe_size']=='41') echo 'selected'; ?>>41</option>
                    <option value="42" <?php if ($d['shoe_size']=='42') echo 'selected'; ?>>42</option>
                </select>
            </div>

            <!-- UPDATES PREFERENCE (select) -->
            <div class="form-group">
                <label>Updates Preference</label>
                <select name="updates_preference" class="ysl-input" required>
                    <option value="Yes" <?php if ($d['updates_preference']=='Yes') echo 'selected'; ?>>Yes</option>
                    <option value="No"  <?php if ($d['updates_preference']=='No')  echo 'selected'; ?>>No</option>
                </select>
            </div>

            <button type="submit" class="btn-ysl btn-full">Save Changes</button>
        </form>
    </div>
</div>

</body>
</html>
