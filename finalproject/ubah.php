<?php 
// koneksi database
include 'koneksi.php';

// menangkap data yang dikirim dari form
$user_id = $_POST['user_id'];
$product_category = $_POST['product_category'];
$fashion_style = $_POST['fashion_style'];
$clothing_size = $_POST['clothing_size'];
$shoe_size = $_POST['shoe_size'];
$updates_preference = $_POST['updates_preference'];

// update data ke database
mysqli_query($koneksi,"UPDATE style_reference SET user_id='$user_id', product_category='$product_category',
fashion_style='$fashion_style', clothing_size='$clothing_size', shoe_size='$shoe_size', 
updates_preference='$updates_preference'
WHERE user_id='$user_id'");

// mengalihkan halaman kembali ke index.php
header("location:showdata.php");
?>