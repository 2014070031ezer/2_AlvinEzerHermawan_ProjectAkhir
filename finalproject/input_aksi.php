<?php
//koneksi database 
include 'koneksi.php';

//menangkap data yang dikirim dari form 
$user_id = $_POST['user_id'];
$product_category = $_POST['product_category']; 
$fashion_style = $_POST['fashion_style']; 
$clothing_size = $_POST['clothing_size'];
$shoe_size = $_POST['shoe_size']; 
$updates_preference = $_POST['updates_preference'];

//menginput data ke database 
mysqli_query($koneksi, "INSERT INTO style_reference (user_id, product_category, fashion_style, clothing_size, shoe_size, updates_preference) 
VALUES('$user_id', '$product_category', '$fashion_style', '$clothing_size', '$shoe_size', '$updates_preference')");

//mengalihkan halaman kembali ke index.php 
header("location:showdata.php"); 

?>